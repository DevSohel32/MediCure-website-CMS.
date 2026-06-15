<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use Hash;
use Auth;
use App\Mail\Websitemail;

class AdminFeatureController extends Controller
{
    public function index()
    {
        $features = Feature::get();
        return view('admin.feature.index', compact('features'));
    }

    public function create()
    {
        return view('admin.feature.create');
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'icon_code' => 'required',
            'content' => 'required',
        ]);

        $obj = new Feature();
        $obj->icon_code = $request->icon_code;
        $obj->name = $request->name;
        $obj->content = $request->content;
        $obj->save();

        return redirect()->route('admin_feature_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $feature = Feature::find($id);
        return view('admin.feature.edit', compact('feature'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'icon_code' => 'required',
            'content' => 'required',
        ]);

        $obj = Feature::where('id',$id)->first();
        $obj->icon_code = $request->icon_code;
        $obj->name = $request->name;
        $obj->content = $request->content;
        $obj->save();

        return redirect()->route('admin_feature_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Feature::where('id',$id)->first();
        $obj->delete();

        return redirect()->route('admin_feature_index')->with('success', __('Data is deleted successfully'));
    }
}
