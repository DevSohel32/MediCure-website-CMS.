<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageSettingFormRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Artisan;

class AdminSettingController extends Controller
{
    public function index()
    {
        $setting = Setting::where('id', 1)->first();
        return view('admin.setting.index', compact('setting'));
    }

    public function update(PageSettingFormRequest $request)
    {
       
        if (config('app.project_mode') == 0) {
            return redirect()->back()->with('info', config('app.project_notification'));
        }

        $obj = Setting::where('id', 1)->firstOrFail();

        $photos = [
            'logo',
            'logo_white',
            'favicon',
            'banner',
            'not_found_photo',
            'preloader_photo'
        ];

        foreach ($photos as $photoKey) {
            if ($request->hasFile($photoKey)) {
                $obj->$photoKey = $this->uploadPhoto($request, $photoKey, $obj->$photoKey);
            }
        }


        if ($request->maintenance_mode_status == 'Enabled') {
            Artisan::call('down');
        } else {
            Artisan::call('up');
        }

        $obj->fill($request->validated());
        $obj->save();


        if ($request->clear_cache_item == 'Yes') {
            Artisan::call('optimize:clear'); // এটি একাই cache, config, view, এবং route ক্লিয়ার করে দেয়
        }

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }

    /**
     * Reusable photo upload handler to avoid duplicate blocks.
     */
    protected function uploadPhoto($request, $fieldKey, $oldFileName = null)
    {
        $file = $request->file($fieldKey);
        $final_name = $fieldKey . '_' . time() . '.' . $file->extension();

        if (!empty($oldFileName) && file_exists(public_path('uploads/' . $oldFileName))) {
            unlink(public_path('uploads/' . $oldFileName));
        }

        $file->move(public_path('uploads'), $final_name);

        return $final_name;
    }
}
