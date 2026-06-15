<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Hash;
use Auth;
use App\Mail\Websitemail;

class AdminDoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::get();
        return view('admin.doctor.index', compact('doctors'));
    }

    public function create()
    {
        return view('admin.doctor.create');
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:doctors',
            'designation' => 'required',
            'biography' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $obj = new Doctor();

        $final_name = 'doctor_'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'), $final_name);
        $obj->photo = $final_name;

        $obj->name = $request->name;
        $obj->slug = $request->slug;
        $obj->designation = $request->designation;
        $obj->biography = $request->biography;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->facebook = $request->facebook;
        $obj->twitter = $request->twitter;
        $obj->linkedin = $request->linkedin;
        $obj->instagram = $request->instagram;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_doctor_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('admin.doctor.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:doctors,slug,'.$id,
            'designation' => 'required',
            'biography' => 'required',
        ]);

        $obj = Doctor::where('id',$id)->first();

        if($request->photo)
        {
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'doctor_'.time().'.'.$request->photo->extension();
            if($obj->photo != '') {
                unlink(public_path('uploads/'.$obj->photo));
            }
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }

        $obj->name = $request->name;
        $obj->slug = $request->slug;
        $obj->designation = $request->designation;
        $obj->biography = $request->biography;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->facebook = $request->facebook;
        $obj->twitter = $request->twitter;
        $obj->linkedin = $request->linkedin;
        $obj->instagram = $request->instagram;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_doctor_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Doctor::where('id',$id)->first();
        if($obj->photo != '') {
            unlink(public_path('uploads/'.$obj->photo));
        }
        $obj->delete();

        return redirect()->route('admin_doctor_index')->with('success', __('Data is deleted successfully'));
    }
}
