<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SharedDynamicFormRequest;
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

    public function store(SharedDynamicFormRequest $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }



        $obj = new Department();
         if($request->hasFile('photo'))
         {
             $obj->photo = $this->uploadPhoto($request, 'photo');
         }
         $obj->fill($request->validated());
        $obj->save();

        return redirect()->route('admin_department_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $department = Department::find($id);
        return view('admin.department.edit', compact('department'));
    }

    public function update(SharedDynamicFormRequest $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }


        $obj = Department::where('id',$id)->first();

        if ($request->hasFile('photo')) {
            $obj->photo = $this->uploadPhoto($request, 'photo', $obj->photo);
        }

       $obj->fill($request->validated());
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


    protected function uploadPhoto($request, $fieldKey, $oldFileName = null){
        $file = $request->file($fieldKey);
        $final_name = 'department_' . time() . '.' . $file->extension();
        if(!empty($oldFileName)&& file_exists(public_path('uploads/'.$oldFileName))){
            unlink(public_path('uploads/'.$oldFileName));
        }
        $file->move(public_path('uploads'), $final_name);
        return $final_name;
    }
}
