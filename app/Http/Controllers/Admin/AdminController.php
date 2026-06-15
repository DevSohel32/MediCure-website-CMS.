<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\Admin;
use App\Models\Subscriber;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Post;
use App\Models\Package;
use App\Models\Faq;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Setting;
use App\Mail\Websitemail;
use App\Models\Department;

class AdminController extends Controller
{
    public function dashboard()
    {
        $total_subscribers = Subscriber::where('status',1)->count();
        $total_doctors = Doctor::count();
        $total_services = Service::count();
        $total_photos = Photo::count();
        $total_videos = Video::count();
        $total_posts = Post::count();
        $total_departments = Department::count();
        $total_packages = Package::count();
        $total_faqs = Faq::count();
        $total_comments = Comment::count();
        $total_replies = Reply::count();
        return view('admin.dashboard.index', compact('total_subscribers','total_doctors','total_services','total_photos','total_videos', 'total_posts','total_departments','total_packages','total_faqs','total_comments','total_replies'));
    }

    public function login()
    {
        if(Auth::guard('admin')->check()){
            return redirect()->route('admin_dashboard');
        }
        return view('admin.auth.login');
    }

    public function login_submit(Request $request)
    {
        $setting = Setting::where('id',1)->first();
        $captcha_status = $setting->captcha_status;

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => $captcha_status == 'Show' ? 'required|captcha' : ''
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];

        if(Auth::guard('admin')->attempt($data)){
            return redirect()->route('admin_dashboard')->with('success', __('Logged in successfully'));
        } else {
            return redirect()->back()->with('error', __('Invalid credentials'));
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('success', __('Logged out successfully'));
    }

    public function forget_password()
    {
        return view('admin.auth.forget_password');
    }

    public function forget_password_submit(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $setting = Setting::where('id',1)->first();
        $captcha_status = $setting->captcha_status;

        $request->validate([
            'email' => 'required|email',
            'captcha' => $captcha_status == 'Show' ? 'required|captcha' : ''
        ]);

        $admin = Admin::where('email', $request->email)->first();
        if(!$admin){
            return redirect()->back()->with('error', __('Email not found'));
        }

        $token = hash('sha256', time());
        $admin->token = $token;
        $admin->update();

        $link = route('admin_reset_password', [$token,$request->email]);
        $subject = 'Reset Password';
        $message = 'Click on the following link to reset your password: <br>';
        $message .= '<a href="'.$link.'">'.$link.'</a>';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success', __('Reset password link sent to your email'));

    }

    public function reset_password($token, $email)
    {
        $admin = Admin::where('email', $email)->where('token', $token)->first();
        if(!$admin){
            return redirect()->route('admin_login')->with('error', __('Invalid token or email'));
        }
        return view('admin.auth.reset_password', compact('token', 'email'));
    }

    public function reset_password_submit(Request $request, $token, $email)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $admin = Admin::where('email', $email)->where('token', $token)->first();
        $admin->password = Hash::make($request->password);
        $admin->token = '';
        $admin->update();

        return redirect()->route('admin_login')->with('success', __('Password reset successfully'));
    }

    public function profile()
    {
        return view('admin.profile.index');
    }

    public function profile_submit(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,'.Auth::guard('admin')->user()->id,
        ]);

        $admin = Admin::where('id',Auth::guard('admin')->user()->id)->first();

        if($request->photo){
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'admin_'.time().'.'.$request->photo->extension();
            if($admin->photo != '') {
                unlink(public_path('uploads/'.$admin->photo));
            }
            $request->photo->move(public_path('uploads'), $final_name);
            $admin->photo = $final_name;
        }

        if($request->password){
            $request->validate([
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ]);
            $admin->password = Hash::make($request->password);
        }

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->biography = $request->biography;
        $admin->update();

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }
}
