<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;
use Hash;
use Auth;

class AdminPostCategoryController extends Controller
{
    public function index()
    {
        $post_categories = PostCategory::orderBy('id','desc')->get();
        return view('admin.post_category.index', compact('post_categories'));
    }

    public function create()
    {
        return view('admin.post_category.create');
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:post_categories',
        ]);

        $obj = new PostCategory();
        $obj->name = $request->name;
        $obj->slug = $request->slug;
        $obj->save();

        return redirect()->route('admin_post_category_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $post_category = PostCategory::find($id);
        return view('admin.post_category.edit', compact('post_category'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:post_categories,slug,'.$id,
        ]);

        $obj = PostCategory::where('id',$id)->first();
        $obj->name = $request->name;
        $obj->slug = $request->slug;
        $obj->save();

        return redirect()->route('admin_post_category_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = PostCategory::where('id',$id)->first();
        $obj->delete();

        return redirect()->route('admin_post_category_index')->with('success', __('Data is deleted successfully'));
    }
}
