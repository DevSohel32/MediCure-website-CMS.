<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Artisan;

class AdminSettingController extends Controller
{
    public function index()
    {
        $setting = Setting::where('id',1)->first();
        return view('admin.setting.index', compact('setting'));
    }
    public function update(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'footer_copyright' => 'required',
            'currency_symbol' => 'required',
            'theme_color_1' => 'required',
            'theme_color_2' => 'required',
            'theme_color_3' => 'required',
            'maintenance_mode_heading' => 'required',
            'maintenance_mode_text' => 'required',
        ]);

        $obj = Setting::where('id',1)->first();

        if($request->logo)
        {
            $request->validate([
                'logo' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name_1 = 'logo_'.time().'.'.$request->logo->extension();
            if($obj->logo != '') {
                unlink(public_path('uploads/'.$obj->logo));
            }
            $request->logo->move(public_path('uploads'), $final_name_1);
            $obj->logo = $final_name_1;
        }

        if($request->logo_white)
        {
            $request->validate([
                'logo_white' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name_2 = 'logo_white_'.time().'.'.$request->logo_white->extension();
            if($obj->logo_white != '') {
                unlink(public_path('uploads/'.$obj->logo_white));
            }
            $request->logo_white->move(public_path('uploads'), $final_name_2);
            $obj->logo_white = $final_name_2;
        }

        if($request->favicon)
        {
            $request->validate([
                'favicon' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name_3 = 'favicon_'.time().'.'.$request->favicon->extension();
            if($obj->favicon != '') {
                unlink(public_path('uploads/'.$obj->favicon));
            }
            $request->favicon->move(public_path('uploads'), $final_name_3);
            $obj->favicon = $final_name_3;
        }

        if($request->banner)
        {
            $request->validate([
                'banner' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name_4 = 'banner_'.time().'.'.$request->banner->extension();
            if($obj->banner != '') {
                unlink(public_path('uploads/'.$obj->banner));
            }
            $request->banner->move(public_path('uploads'), $final_name_4);
            $obj->banner = $final_name_4;
        }

        if($request->not_found_photo)
        {
            $request->validate([
                'not_found_photo' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name_4 = 'not_found_photo_'.time().'.'.$request->not_found_photo->extension();
            if($obj->not_found_photo != '') {
                unlink(public_path('uploads/'.$obj->not_found_photo));
            }
            $request->not_found_photo->move(public_path('uploads'), $final_name_4);
            $obj->not_found_photo = $final_name_4;
        }

        if($request->preloader_photo)
        {
            $request->validate([
                'preloader_photo' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name_4 = 'preloader_photo_'.time().'.'.$request->preloader_photo->extension();
            if($obj->preloader_photo != '') {
                unlink(public_path('uploads/'.$obj->preloader_photo));
            }
            $request->preloader_photo->move(public_path('uploads'), $final_name_4);
            $obj->preloader_photo = $final_name_4;
        }

        if($request->maintenance_mode_status == 'Enabled') {
            Artisan::call('down');
        } else {
            Artisan::call('up');
        }

        $obj->not_found_heading = $request->not_found_heading;
        $obj->not_found_text = $request->not_found_text;
        $obj->not_found_button_text = $request->not_found_button_text;
        $obj->not_found_button_status = $request->not_found_button_status;
        $obj->top_bar_phone = $request->top_bar_phone;
        $obj->top_bar_email = $request->top_bar_email;
        $obj->top_bar_faq_status = $request->top_bar_faq_status;
        $obj->top_bar_contact_status = $request->top_bar_contact_status;
        $obj->top_bar_facebook = $request->top_bar_facebook;
        $obj->top_bar_twitter = $request->top_bar_twitter;
        $obj->top_bar_linkedin = $request->top_bar_linkedin;
        $obj->top_bar_instagram = $request->top_bar_instagram;
        $obj->footer_address_heading = $request->footer_address_heading;
        $obj->footer_address = $request->footer_address;
        $obj->footer_phone_heading = $request->footer_phone_heading;
        $obj->footer_phone = $request->footer_phone;
        $obj->footer_email_heading = $request->footer_email_heading;
        $obj->footer_email = $request->footer_email;
        $obj->footer_facebook = $request->footer_facebook;
        $obj->footer_twitter = $request->footer_twitter;
        $obj->footer_instagram = $request->footer_instagram;
        $obj->footer_linkedin = $request->footer_linkedin;
        $obj->footer_copyright = $request->footer_copyright;
        $obj->footer_column1_heading = $request->footer_column1_heading;
        $obj->footer_column1_text = $request->footer_column1_text;
        $obj->footer_column2_heading = $request->footer_column2_heading;
        $obj->footer_column3_heading = $request->footer_column3_heading;
        $obj->footer_column4_heading = $request->footer_column4_heading;
        $obj->footer_column4_subscriber_text = $request->footer_column4_subscriber_text;
        $obj->footer_column4_subscriber_placeholder_text = $request->footer_column4_subscriber_placeholder_text;
        $obj->footer_column4_subscriber_button_text = $request->footer_column4_subscriber_button_text;

        $obj->cookie_consent_message = $request->cookie_consent_message;
        $obj->cookie_consent_button_text = $request->cookie_consent_button_text;
        $obj->cookie_consent_text_color = $request->cookie_consent_text_color;
        $obj->cookie_consent_bg_color = $request->cookie_consent_bg_color;
        $obj->cookie_consent_button_text_color = $request->cookie_consent_button_text_color;
        $obj->cookie_consent_button_bg_color = $request->cookie_consent_button_bg_color;
        $obj->cookie_consent_status = $request->cookie_consent_status;

        $obj->google_analytic_measurement_id = $request->google_analytic_measurement_id;
        $obj->google_analytic_status = $request->google_analytic_status;

        $obj->tawk_live_chat_property_id = $request->tawk_live_chat_property_id;
        $obj->tawk_live_chat_status = $request->tawk_live_chat_status;

        $obj->sticky_header_status = $request->sticky_header_status;
        $obj->currency_symbol = $request->currency_symbol;
        $obj->preloader_status = $request->preloader_status;
        $obj->layout_direction = $request->layout_direction;
        $obj->theme_color_1 = $request->theme_color_1;
        $obj->theme_color_2 = $request->theme_color_2;
        $obj->theme_color_3 = $request->theme_color_3;
        $obj->captcha_status = $request->captcha_status;
        $obj->maintenance_mode_heading = $request->maintenance_mode_heading;
        $obj->maintenance_mode_text = $request->maintenance_mode_text;
        $obj->maintenance_mode_logo_status = $request->maintenance_mode_logo_status;
        $obj->maintenance_mode_status = $request->maintenance_mode_status;
        $obj->maintenance_mode_countdown_heading = $request->maintenance_mode_countdown_heading;
        $obj->maintenance_mode_countdown_date = $request->maintenance_mode_countdown_date;
        $obj->maintenance_mode_countdown_time = $request->maintenance_mode_countdown_time;
        $obj->maintenance_mode_countdown_status = $request->maintenance_mode_countdown_status;

        $obj->save();

        if($request->clear_cache_item == 'Yes') {
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('view:clear');
            Artisan::call('route:clear');
            Artisan::call('optimize:clear');
        }

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }
}
