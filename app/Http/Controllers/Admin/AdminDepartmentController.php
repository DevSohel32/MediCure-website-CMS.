<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class AdminDepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::get();
        return view('admin.department.index', compact('departments'));
    }

    public function create()
    {
        return view('admin.department.create');
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'title' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:departments',
            'short_description' => 'required',
            'description' => 'required',
            'project_date' => 'required|date',
            'client' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $obj = new Department();

        $final_name = 'department_'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'), $final_name);
        $obj->photo = $final_name;

        $obj->title = $request->title;
        $obj->slug = $request->slug;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->department_date = $request->department_date;
        $obj->client = $request->client;
        $obj->location = $request->location;
        $obj->website = $request->website;
        $obj->phone = $request->phone;
        $obj->quote_person = $request->quote_person;
        $obj->quote_text = $request->quote_text;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_department_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $department = Department::find($id);
        return view('admin.department.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'title' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:departments,slug,'.$id,
            'short_description' => 'required',
            'description' => 'required',
            'department_date' => 'required|date',
            'client' => 'required',
        ]);

        $obj = Department::where('id',$id)->first();

        if($request->photo)
        {
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'department_'.time().'.'.$request->photo->extension();
            if($obj->photo != '') {
                unlink(public_path('uploads/'.$obj->photo));
            }
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }

        $obj->title = $request->title;
        $obj->slug = $request->slug;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->department_date = $request->department_date;
        $obj->client = $request->client;
        $obj->location = $request->location;
        $obj->website = $request->website;
        $obj->phone = $request->phone;
        $obj->quote_person = $request->quote_person;
        $obj->quote_text = $request->quote_text;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_department_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = Department::where('id',$id)->first();
        if($obj->photo != '') {
            unlink(public_path('uploads/'.$obj->photo));
        }
        $obj->delete();

        return redirect()->route('admin_department_index')->with('success', __('Data is deleted successfully'));
    }
}
