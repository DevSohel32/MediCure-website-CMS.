<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use Hash;
use Auth;

class AdminPhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::get();
        return view('admin.photo_gallery.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.photo_gallery.create');
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $obj = new Photo();

        $final_name = 'photo_'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'), $final_name);
        $obj->photo = $final_name;

        $obj->caption = $request->caption;
        $obj->save();

        return redirect()->route('admin_photo_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $photo = Photo::find($id);
        return view('admin.photo_gallery.edit', compact('photo'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = Photo::where('id',$id)->first();

        if($request->photo)
        {
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'photo_'.time().'.'.$request->photo->extension();
            if($obj->photo != '') {
                unlink(public_path('uploads/'.$obj->photo));
            }
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }

        $obj->caption = $request->caption;
        $obj->save();

        return redirect()->route('admin_photo_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Photo::where('id',$id)->first();
        if($obj->photo != '') {
            unlink(public_path('uploads/'.$obj->photo));
        }
        $obj->delete();

        return redirect()->route('admin_photo_index')->with('success', __('Data is deleted successfully'));
    }
}
