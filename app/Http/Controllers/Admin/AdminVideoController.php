<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Hash;
use Auth;

class AdminVideoController extends Controller
{
    public function index()
    {
        $videos = Video::get();
        return view('admin.video_gallery.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.video_gallery.create');
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'video' => 'required',
        ]);

        $obj = new Video();
        $obj->video = $request->video;
        $obj->caption = $request->caption;
        $obj->save();

        return redirect()->route('admin_video_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $video = Video::find($id);
        return view('admin.video_gallery.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = Video::where('id',$id)->first();

        $request->validate([
            'video' => 'required',
        ]);
        $obj->video = $request->video;
        $obj->caption = $request->caption;
        $obj->save();

        return redirect()->route('admin_video_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Video::where('id',$id)->first();
        $obj->delete();

        return redirect()->route('admin_video_index')->with('success', __('Data is deleted successfully'));
    }
}
