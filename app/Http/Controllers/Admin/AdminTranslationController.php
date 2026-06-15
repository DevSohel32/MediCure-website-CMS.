<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminTranslationController extends Controller
{
    public function index()
    {
        $translation_data = json_decode(file_get_contents(resource_path('lang/en.json')));
        return view('admin.translation.index', compact('translation_data'));
    }

    public function update(Request $request) 
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $arr_key = [];
        foreach($request->key_arr as $item) {
            $arr_key[] = strip_tags($item);
        }
        $arr_value = [];
        foreach($request->value_arr as $item) {
            $arr_value[] = strip_tags($item);
        }
        for($i=0;$i<count($arr_key);$i++) {
            $data[$arr_key[$i]] = $arr_value[$i];
        }

        $new_json = json_encode($data,JSON_PRETTY_PRINT);
        file_put_contents(resource_path('lang/en.json'), $new_json);

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }
}