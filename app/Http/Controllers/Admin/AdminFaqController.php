<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Hash;
use Auth;

class AdminFaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::get();
        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $obj = new Faq();
        $obj->question = $request->question;
        $obj->answer = $request->answer;
        $obj->save();

        return redirect()->route('admin_faq_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $obj = Faq::where('id',$id)->first();
        $obj->question = $request->question;
        $obj->answer = $request->answer;
        $obj->save();

        return redirect()->route('admin_faq_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Faq::where('id',$id)->first();
        $obj->delete();

        return redirect()->route('admin_faq_index')->with('success', __('Data is deleted successfully'));
    }
}
