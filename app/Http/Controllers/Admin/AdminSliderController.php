<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Hash;
use Auth;
use App\Mail\Websitemail;

class AdminSliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'subheading' => 'required',
            'heading' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $obj = new Slider();

        $final_name = 'slider_'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'), $final_name);
        $obj->photo = $final_name;

        $obj->subheading = $request->subheading;
        $obj->heading = $request->heading;
        $obj->button1_text = $request->button1_text;
        $obj->button1_link = $request->button1_link;
        $obj->button2_text = $request->button2_text;
        $obj->button2_link = $request->button2_link;
        $obj->save();

        return redirect()->route('admin_slider_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'subheading' => 'required',
            'heading' => 'required',
        ]);

        $obj = Slider::where('id',$id)->first();

        if($request->photo)
        {
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'slider_'.time().'.'.$request->photo->extension();
            if($obj->photo != '') {
                unlink(public_path('uploads/'.$obj->photo));
            }
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }

        $obj->subheading = $request->subheading;
        $obj->heading = $request->heading;
        $obj->button1_text = $request->button1_text;
        $obj->button1_link = $request->button1_link;
        $obj->button2_text = $request->button2_text;
        $obj->button2_link = $request->button2_link;
        $obj->save();

        return redirect()->route('admin_slider_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Slider::where('id',$id)->first();
        if($obj->photo != '') {
            unlink(public_path('uploads/'.$obj->photo));
        }
        $obj->delete();

        return redirect()->route('admin_slider_index')->with('success', __('Data is deleted successfully'));
    }
}
