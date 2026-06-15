<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPageItemRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // --- IMAGE / FILE VALIDATION ---
            'home_about_photo1' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'home_about_photo2' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'home_video_photo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_about_photo1' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_about_photo2' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contact_map_photo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'appointment_form_photo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            // --- REQUIRED TEXT FIELDS ---
            'home_about_subheading' => 'required',
            'home_about_heading' => 'required',
            'home_feature_subheading' => 'required',
            'home_feature_heading' => 'required',
            'home_video_subheading' => 'required',
            'home_video_heading' => 'required',
            'home_video_youtube' => 'required',
            'home_doctor_subheading' => 'required',
            'home_doctor_heading' => 'required',
            'home_doctor_total' => 'required',
            'home_blog_subheading' => 'required',
            'home_blog_heading' => 'required',
            'home_blog_total' => 'required',
            'about_page_title' => 'required',
            'about_about_subheading' => 'required',
            'about_about_heading' => 'required',
            'about_doctor_subheading' => 'required',
            'about_doctor_heading' => 'required',
            'about_doctor_total' => 'required',
            'services_page_title' => 'required',
            'services_per_page' => 'required',
            'departments_page_title' => 'required',
            'departments_per_page' => 'required',
            'doctors_page_title' => 'required',
            'doctors_per_page' => 'required',
            'faq_page_title' => 'required',
            'pricing_page_title' => 'required',
            'photo_gallery_page_title' => 'required',
            'video_gallery_page_title' => 'required',
            'contact_page_title' => 'required',
            'contact_form_subheading' => 'required',
            'contact_form_heading' => 'required',
            'contact_form_button_text' => 'required',
            'appointment_page_title' => 'required',
            'appointment_form_heading' => 'required',
            'appointment_form_button_text' => 'required',
            'terms_page_title' => 'required',
            'terms_content' => 'required',
            'privacy_page_title' => 'required',
            'privacy_content' => 'required',
            'blog_page_title' => 'required',
            'blog_per_page' => 'required',
            'blog_category_page_title' => 'required',
            'blog_category_per_page' => 'required',
            'blog_tag_page_title' => 'required',
            'blog_tag_per_page' => 'required',
            'blog_search_page_title' => 'required',
            'blog_search_per_page' => 'required',
            'blog_sidebar_recent_post_total' => 'required',
            'blog_sidebar_recent_post_status' => 'required',
            'blog_sidebar_category_status' => 'required',
            'blog_sidebar_tag_status' => 'required',
            'blog_sidebar_search_status' => 'required',

            // --- OPTIONAL / NULLABLE FIELDS ---
            // Declaring these lets $request->validated() include them for the update array
            'home_about_text' => 'nullable',
            'home_about_list_items' => 'nullable',
            'home_about_phone' => 'nullable',
            'home_about_button_text' => 'nullable',
            'home_about_status' => 'nullable',
            'home_feature_status' => 'nullable',
            'home_video_status' => 'nullable',
            'home_doctor_status' => 'nullable',
            'home_blog_status' => 'nullable',
            'home_seo_title' => 'nullable',
            'home_seo_meta_description' => 'nullable',
            'about_about_text' => 'nullable',
            'about_about_list_items' => 'nullable',
            'about_about_phone' => 'nullable',
            'about_about_button_text' => 'nullable',
            'about_about_status' => 'nullable',
            'about_doctor_status' => 'nullable',
            'about_counter_status' => 'nullable',
            'about_seo_title' => 'nullable',
            'about_seo_meta_description' => 'nullable',
            'services_seo_title' => 'nullable',
            'services_seo_meta_description' => 'nullable',
            'service_widget_title' => 'nullable',
            'service_widget_text' => 'nullable',
            'service_widget_button_text' => 'nullable',
            'departments_seo_title' => 'nullable',
            'departments_seo_meta_description' => 'nullable',
            'department_widget_title' => 'nullable',
            'department_widget_text' => 'nullable',
            'department_widget_button_text' => 'nullable',
            'department_cta_subheading' => 'nullable',
            'department_cta_heading' => 'nullable',
            'department_cta_button_text' => 'nullable',
            'department_cta_status' => 'nullable',
            'doctors_seo_title' => 'nullable',
            'doctors_seo_meta_description' => 'nullable',
            'faq_seo_title' => 'nullable',
            'faq_seo_meta_description' => 'nullable',
            'pricing_seo_title' => 'nullable',
            'pricing_seo_meta_description' => 'nullable',
            'photo_gallery_seo_title' => 'nullable',
            'photo_gallery_seo_meta_description' => 'nullable',
            'video_gallery_seo_title' => 'nullable',
            'video_gallery_seo_meta_description' => 'nullable',
            'contact_map_code' => 'nullable',
            'contact_map_phone_title' => 'nullable',
            'contact_map_phone' => 'nullable',
            'contact_map_email_title' => 'nullable',
            'contact_map_email' => 'nullable',
            'contact_map_address_title' => 'nullable',
            'contact_map_address' => 'nullable',
            'contact_map_status' => 'nullable',
            'contact_seo_title' => 'nullable',
            'contact_seo_meta_description' => 'nullable',
            'appointment_seo_title' => 'nullable',
            'appointment_seo_meta_description' => 'nullable',
            'terms_seo_title' => 'nullable',
            'terms_seo_meta_description' => 'nullable',
            'privacy_seo_title' => 'nullable',
            'privacy_seo_meta_description' => 'nullable',
            'blog_seo_title' => 'nullable',
            'blog_seo_meta_description' => 'nullable',
            'blog_detail_tag_status' => 'nullable',
            'blog_detail_share_status' => 'nullable',
            'blog_detail_author_status' => 'nullable',
            'blog_detail_comment_status' => 'nullable',
            'blog_category_seo_title' => 'nullable',
            'blog_category_seo_meta_description' => 'nullable',
            'blog_tag_seo_title' => 'nullable',
            'blog_tag_seo_meta_description' => 'nullable',
            'blog_search_seo_title' => 'nullable',
            'blog_search_seo_meta_description' => 'nullable',
        ];
    }
}
