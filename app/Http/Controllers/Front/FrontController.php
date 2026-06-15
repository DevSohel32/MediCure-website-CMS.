<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\Websitemail;
use App\Models\Admin;
use App\Models\Faq;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PageItem;
use App\Models\Subscriber;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Feature;
use App\Models\Slider;
use App\Models\CounterItem;
use App\Models\Package;
use App\Models\Comment;
use App\Models\Department;
use App\Models\Reply;
use App\Models\Setting;

class FrontController extends Controller
{
    public function index()
    {

        $page_item = PageItem::where('id', 1)->first();
        $posts = Post::orderBy('id','desc')->take($page_item->home_blog_total)->get();
        $features = Feature::get();
        $sliders = Slider::get();
        $doctors = Doctor::take($page_item->home_doctor_total)->get();
        $admin_data = Admin::where('id', 1)->first();
        $counter_item = CounterItem::where('id',1)->first();
        return view('front.home', compact('posts','features','sliders','doctors','admin_data','counter_item'));
    }

    public function about()
    {
        $page_item = PageItem::where('id', 1)->first();
        $doctors = Doctor::take($page_item->about_doctor_total)->get();
        $counter_item = CounterItem::where('id',1)->first();
        return view('front.about', compact('doctors','counter_item'));
    }

    public function services()
    {
        $page_item = PageItem::where('id', 1)->first();
        $services = Service::paginate($page_item->services_per_page);
        return view('front.services', compact('services'));
    }

    public function service($slug)
    {
        $service = Service::where('slug', $slug)->first();
        $services = Service::orderBy('name','asc')->get();
        return view('front.service', compact('service', 'services'));
    }

    public function departments()
    {
        $page_item = PageItem::where('id', 1)->first();
        $departments = Department::paginate($page_item->departments_per_page);
        return view('front.departments', compact('departments'));
    }

    public function department($slug)
    {
        $department = Department::where('slug', $slug)->first();
        return view('front.department', compact('department'));
    }

    public function doctors()
    {
        $page_item = PageItem::where('id', 1)->first();
        $doctors = Doctor::paginate($page_item->doctors_per_page);
        return view('front.doctors', compact('doctors'));
    }

    public function doctor($slug)
    {
        $doctor = Doctor::where('slug', $slug)->first();
        return view('front.doctor', compact('doctor'));
    }

    public function pricing()
    {
        $packages = Package::get();
        return view('front.pricing', compact('packages'));
    }

    public function blog()
    {
        $page_item = PageItem::where('id', 1)->first();
        $posts = Post::orderBy('id','desc')->paginate($page_item->blog_per_page);
        $admin_data = Admin::where('id', 1)->first();
        return view('front.blog', compact('posts', 'admin_data'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if($post->tags!='') {
            $post_tags = explode(',', $post->tags);
        } else {
            $post_tags = [];
        }
        $admin_data = Admin::where('id', 1)->first();
        $total_comments = Comment::where('status', 'Active')->where('post_id',$post->id)->count();
        $comments = Comment::orderBy('id','asc')->where('status','Active')->where('post_id',$post->id)->get();
        return view('front.post', compact('post', 'admin_data', 'post_tags', 'total_comments', 'comments'));
    }

    public function comment_submit(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->comment = $request->comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->status = 'Pending';
        $comment->save();

        // Send Email to Admin
        $subject = 'New Comment Submitted';
        $message = 'A new comment has been submitted on your blog post. Please login to your admin panel to approve it.<br>';
        $message .= '<a href="'.route('admin_comment').'">Click Here</a>';

        $admin_email = Admin::where('id',1)->first()->email;

        \Mail::to($admin_email)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success','Comment submitted successfully');
    }

    public function reply_submit(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'reply' => 'required',
        ]);

        $comment = new Reply();
        $comment->comment_id = $request->comment_id;
        $comment->reply = $request->reply;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->user_type = 'Visitor';
        $comment->status = 'Pending';
        $comment->save();

        // Send Email to Admin
        $subject = 'New Reply Submitted';
        $message = 'A new reply has been submitted on your blog post. Please login to your admin panel to approve it.<br>';
        $message .= '<a href="'.route('admin_reply').'">Click Here</a>';

        $admin_email = Admin::where('id',1)->first()->email;

        \Mail::to($admin_email)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success','Reply submitted successfully');
    }

    public function category($slug)
    {
        $page_item = PageItem::where('id', 1)->first();
        $category = PostCategory::where('slug', $slug)->first();
        $posts = Post::where('post_category_id', $category->id)->orderBy('id','desc')->paginate($page_item->blog_category_page_page);
        $admin_data = Admin::where('id', 1)->first();
        return view('front.category', compact('posts', 'admin_data', 'category'));
    }

    public function tag($name)
    {
        $page_item = PageItem::where('id', 1)->first();
        $posts = Post::where('tags', 'like', '%'.$name.'%')->orderBy('id','desc')->paginate($page_item->blog_tag_page_page);
        $admin_data = Admin::where('id', 1)->first();
        return view('front.tag', compact('posts', 'admin_data', 'name'));
    }

    public function search(Request $request)
    {
        $page_item = PageItem::where('id', 1)->first();
        $search_text = $request->text;
        $posts = Post::where('title', 'like', '%' . $search_text . '%')
                ->orWhere('short_description', 'like', '%' . $search_text . '%')
                ->orWhere('description', 'like', '%' . $search_text . '%')
                ->paginate($page_item->blog_search_page_page);
        $search_by = $search_text;
        $admin_data = Admin::where('id', 1)->first();
        return view('front.search', compact('posts', 'search_by', 'admin_data'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function appointment()
    {
        $services = Service::orderBy('name','asc')->get();
        return view('front.appointment', compact('services'));
    }

    public function faq()
    {
        $faqs = Faq::get();
        return view('front.faq', compact('faqs'));
    }

    public function photo_gallery()
    {
        $photos = Photo::paginate(9);
        return view('front.photo_gallery', compact('photos'));
    }

    public function video_gallery()
    {
        $videos = Video::paginate(9);
        return view('front.video_gallery', compact('videos'));
    }

    public function terms()
    {
        return view('front.terms');
    }
    public function privacy()
    {
        return view('front.privacy');
    }

    public function subscriber_send_email(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return response()->json(['code'=>0,'error_message'=>env('PROJECT_NOTIFICATION')]);
        }

        $validator = \Validator::make($request->all(),[
            'email' => 'required|email|unique:subscribers,email'
        ]);

        if(!$validator->passes()) {
            return response()->json(['code'=>0,'error_message'=>$validator->errors()->toArray()]);
        } else {

            $token = hash('sha256', time());

            $obj = new Subscriber();
            $obj->email = $request->email;
            $obj->token = $token;
            $obj->status = 0;
            $obj->save();

            $verification_link = url('subscriber/verify/'.$request->email.'/'.$token);

            // Send email
            $subject = 'Subscriber Verification';
            $message = 'Please click on the link below to confirm subscription:<br>';
            $message .= '<a href="'.$verification_link.'">';
            $message .= $verification_link;
            $message .= '</a>';

            \Mail::to($request->email)->send(new Websitemail($subject,$message));

            return response()->json(['code'=>1,'success_message'=>'Please check your email to confirm subscription']);
        }
    }

    public function subscriber_verify($email,$token)
    {
        $subscriber_data = Subscriber::where('email',$email)->where('token',$token)->first();

        if($subscriber_data) {

            $subscriber_data->token = '';
            $subscriber_data->status = 1;
            $subscriber_data->update();

            return redirect()->route('home')->with('success', __('Your subscription is verified successfully!'));

        } else {
            return redirect()->route('home');
        }
    }

    public function contact_send_email(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $setting = Setting::where('id',1)->first();
        $captcha_status = $setting->captcha_status;

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'captcha' => $captcha_status == 'Show' ? 'required|captcha' : ''
        ]);

        $admin_data = Admin::where('id',1)->first();
        $admin_email = $admin_data->email;

        $subject = 'Contact Page Message';
        $message = '<h3>Visitor Information:</h3>';
        $message .= '<b>Name:</b><br>'.$request->name.'<br><br>';
        $message .= '<b>Email:</b><br>'.$request->email.'<br><br>';
        $message .= '<b>Phone:</b><br>'.$request->phone.'<br><br>';
        $message .= '<b>Message:</b><br>'.$request->message.'<br><br>';

        \Mail::to($admin_email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', __('Your message sent successfully'));
    }


    public function appointment_send_email(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $setting = Setting::where('id',1)->first();
        $captcha_status = $setting->captcha_status;

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'request_date' => 'required',
            'request_time' => 'required',
            'captcha' => $captcha_status == 'Show' ? 'required|captcha' : ''
        ]);

        $admin_data = Admin::where('id',1)->first();
        $admin_email = $admin_data->email;

        $subject = 'Appointment Request';
        $message = '<h3>Appointment Request Information:</h3>';
        $message .= '<b>Name:</b><br>'.$request->name.'<br><br>';
        $message .= '<b>Email:</b><br>'.$request->email.'<br><br>';
        $message .= '<b>Service:</b><br>'.$request->service.'<br><br>';
        $message .= '<b>Request Date:</b><br>'.$request->request_date.'<br><br>';
        $message .= '<b>Request Time:</b><br>'.$request->request_time.'<br><br>';

        \Mail::to($admin_email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', __('Your message sent successfully'));
    }
}
