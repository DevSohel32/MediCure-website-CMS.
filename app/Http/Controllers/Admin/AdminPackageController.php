<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageFeature;
use Hash;
use Auth;
use App\Mail\Websitemail;

class AdminPackageController extends Controller
{
    public function index()
    {
        $packages = Package::get();
        return view('admin.package.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.package.create');
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'billing_cycle' => 'required',
            'button_text' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $obj = new Package();

        $final_name = 'package_'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'), $final_name);
        $obj->photo = $final_name;

        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->price = $request->price;
        $obj->billing_cycle = $request->billing_cycle;
        $obj->button_text = $request->button_text;
        $obj->save();

        return redirect()->route('admin_package_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $package = Package::find($id);
        return view('admin.package.edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'billing_cycle' => 'required',
            'button_text' => 'required',
        ]);

        $obj = Package::where('id',$id)->first();

        if($request->photo)
        {
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'package_'.time().'.'.$request->photo->extension();
            if($obj->photo != '') {
                unlink(public_path('uploads/'.$obj->photo));
            }
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }

        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->price = $request->price;
        $obj->billing_cycle = $request->billing_cycle;
        $obj->button_text = $request->button_text;
        $obj->save();

        return redirect()->route('admin_package_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = Package::where('id',$id)->first();
        if($obj->photo != '') {
            unlink(public_path('uploads/'.$obj->photo));
        }
        $obj->delete();

        PackageFeature::where('package_id',$id)->delete();

        return redirect()->route('admin_package_index')->with('success', __('Data is deleted successfully'));
    }

    public function features($id)
    {
        $package = Package::find($id);
        $package_features = PackageFeature::where('package_id',$id)->get();
        return view('admin.package.features', compact('package','package_features'));
    }

    public function feature_store(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'name' => 'required',
            'is_available' => 'required'
        ]);

        $obj = new PackageFeature();
        $obj->package_id = $id;
        $obj->name = $request->name;
        $obj->is_available = $request->is_available;
        $obj->save();

        return redirect()->back()->with('success', __('Data is created successfully'));
    }

    public function feature_destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = PackageFeature::where('id',$id)->first();
        $obj->delete();

        return redirect()->back()->with('success', __('Data is deleted successfully'));
    }
}
