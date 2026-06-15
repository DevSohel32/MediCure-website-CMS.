<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPageItemRequest;
use App\Models\PageItem;


class AdminPageItemController extends Controller
{
    public function index()
    {
        $page_item = PageItem::where('id',1)->first();
        return view('admin.page_item.index', compact('page_item'));
    }
    public function update(AdminPageItemRequest $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }


        $obj = PageItem::where('id',1)->first();

         $photos =[
           'home_about_photo1',
            'home_about_photo2',
            'home_video_photo',
            'about_about_photo1',
            'about_about_photo2',
            'contact_map_photo',
            'appointment_form_photo'
         ];
        foreach ($photos as $photoKey) {
            if ($request->hasFile($photoKey)) {
                $obj->$photoKey = $this->uploadFile($request, $photoKey, $obj->$photoKey);
            }
        }

        $obj->fill($request->validated());

        $obj->save();

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }


    protected function uploadFile($request,$fieldKey, $oldFileName) {
        $request -> validate([
           $fieldKey => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $file = $request->file($fieldKey);
        $final_name = $fieldKey . '_' . time() . '.' . $file->extension();

        if (!empty($oldFileName) && file_exists(public_path('uploads/' . $oldFileName))) {
            unlink(public_path('uploads/' . $oldFileName));
        }

        $file->move(public_path('uploads'), $final_name);

        return $final_name;
    }
}
