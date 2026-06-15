<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageSettingFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            // --- 404 (Not Found) Page Settings ---
            "not_found_heading"       => 'sometimes|required|string|max:255',
            "not_found_text"          => 'sometimes|required|string',
            "not_found_button_text"   => 'sometimes|required|string|max:255',
            "not_found_button_status" => 'sometimes|required|string', // বা integer (যদি ডাটাবেজে ০ বা ১ সেভ করেন)

            // --- Top Bar Settings ---
            "top_bar_phone"           => 'sometimes|required|string|max:50', // ফোন নম্বরের জন্য string নিরাপদ
            "top_bar_email"           => 'sometimes|required|email|max:255', // ইমেইল ভ্যালিডেশন
            "top_bar_faq_status"      => 'sometimes|required|string',
            "top_bar_contact_status"  => 'sometimes|required|string',
            "top_bar_facebook"        => 'sometimes|nullable|url', // সোশাল মিডিয়ার জন্য url ভ্যালিডেশন
            "top_bar_twitter"         => 'sometimes|nullable|url',
            "top_bar_linkedin"        => 'sometimes|nullable|url',
            "top_bar_instagram"       => 'sometimes|nullable|url',

            // --- Footer Settings ---
            "footer_address_heading"  => 'sometimes|required|string|max:255',
            "footer_address"          => 'sometimes|required|string',
            "footer_phone_heading"    => 'sometimes|required|string|max:255',
            "footer_phone"            => 'sometimes|required|string|max:50',
            "footer_email_heading"    => 'sometimes|required|string|max:255',
            "footer_email"            => 'sometimes|required|email|max:255',
            "footer_facebook"         => 'sometimes|nullable|url',
            "footer_twitter"          => 'sometimes|nullable|url',
            "footer_instagram"        => 'sometimes|nullable|url',
            "footer_linkedin"         => 'sometimes|nullable|url',
            "footer_copyright"        => 'sometimes|required|string',

            // --- Footer Columns ---
            "footer_column1_heading"  => 'sometimes|required|string|max:255',
            "footer_column1_text"     => 'sometimes|required|string',
            "footer_column2_heading"  => 'sometimes|required|string|max:255',
            "footer_column3_heading"  => 'sometimes|required|string|max:255',
            "footer_column4_heading"  => 'sometimes|required|string|max:255',
            "footer_column4_subscriber_text"             => 'sometimes|required|string',
            "footer_column4_subscriber_placeholder_text" => 'sometimes|required|string|max:255',
            "footer_column4_subscriber_button_text"      => 'sometimes|required|string|max:255',

            // --- Cookie Consent Settings ---
            "cookie_consent_message"           => 'sometimes|required|string',
            "cookie_consent_button_text"       => 'sometimes|required|string|max:255',
            "cookie_consent_text_color"        => 'sometimes|required|string|max:50', // রঙের কোডের জন্য string
            "cookie_consent_bg_color"          => 'sometimes|required|string|max:50',
            "cookie_consent_button_text_color" => 'sometimes|required|string|max:50',
            "cookie_consent_button_bg_color"   => 'sometimes|required|string|max:50',
            "cookie_consent_status"            => 'sometimes|required|string',

            // --- Third Party APIs ---
            "google_analytic_measurement_id"   => 'sometimes|nullable|string|max:100',
            "google_analytic_status"           => 'sometimes|required|string',
            "tawk_live_chat_property_id"       => 'sometimes|nullable|string|max:100',
            "tawk_live_chat_status"            => 'sometimes|required|string',

            // --- General Website Settings ---
            "sticky_header_status"    => 'sometimes|required|string',
            "currency_symbol"         => 'sometimes|required|string|max:10',
            "preloader_status"        => 'sometimes|required|string',
            "layout_direction"        => 'sometimes|required|string',
            "theme_color_1"           => 'sometimes|required|string|max:50',
            "theme_color_2"           => 'sometimes|required|string|max:50',
            "theme_color_3"           => 'sometimes|required|string|max:50',
            "captcha_status"          => 'sometimes|required|string',

            // --- Maintenance Mode Settings ---
            "maintenance_mode_heading"           => 'sometimes|required|string|max:255',
            "maintenance_mode_text"              => 'sometimes|required|string',
            "maintenance_mode_logo_status"       => 'sometimes|required|string',
            "maintenance_mode_status"            => 'sometimes|required|string',
            "maintenance_mode_countdown_heading" => 'sometimes|required|string|max:255',
            "maintenance_mode_countdown_date"    => 'sometimes|required|date', // ডেট ভ্যালিডেশন
            "maintenance_mode_countdown_time"    => 'sometimes|required',
            "maintenance_mode_countdown_status"  => 'sometimes|required|string',

            // PageSettingFormRequest.php ফাইলের rules() এর ভেতরে এগুলো যুক্ত করুন:
"logo"            => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
"logo_white"      => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
"favicon"         => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
"banner"          => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
"not_found_photo" => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
"preloader_photo" => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
