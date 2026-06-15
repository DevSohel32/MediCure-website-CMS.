<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CounterItem;

class AdminCounterItemController extends Controller
{
    public function index()
    {
        $counter_item = CounterItem::where('id',1)->first();
        return view('admin.counter_item.index', compact('counter_item'));
    }
    public function update(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = CounterItem::where('id',1)->first();
        $obj->item1_number = $request->item1_number;
        $obj->item1_title = $request->item1_title;
        $obj->item1_content = $request->item1_content;
        $obj->item2_number = $request->item2_number;
        $obj->item2_title = $request->item2_title;
        $obj->item2_content = $request->item2_content;
        $obj->item3_number = $request->item3_number;
        $obj->item3_title = $request->item3_title;
        $obj->item3_content = $request->item3_content;
        $obj->save();

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }
}