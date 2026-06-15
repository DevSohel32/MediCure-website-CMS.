<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Hash;
use Auth;
use App\Mail\Websitemail;

class AdminServiceController extends Controller
{
    public function index()
    {
        $services = Service::get();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:services',
            'icon_code' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $obj = new Service();

        $final_name = 'service_'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'), $final_name);
        $obj->photo = $final_name;

        $obj->name = $request->name;
        $obj->slug = $request->slug;
        $obj->icon_code = $request->icon_code;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->phone = $request->phone;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_service_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:services,slug,'.$id,
            'icon_code' => 'required',
            'short_description' => 'required',
            'description' => 'required',
        ]);

        $obj = Service::where('id',$id)->first();

        if($request->photo)
        {
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'service_'.time().'.'.$request->photo->extension();
            if($obj->photo != '') {
                unlink(public_path('uploads/'.$obj->photo));
            }
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }

        $obj->name = $request->name;
        $obj->slug = $request->slug;
        $obj->icon_code = $request->icon_code;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->phone = $request->phone;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_service_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Service::where('id',$id)->first();
        if($obj->photo != '') {
            unlink(public_path('uploads/'.$obj->photo));
        }
        $obj->delete();

        return redirect()->route('admin_service_index')->with('success', __('Data is deleted successfully'));
    }
}
