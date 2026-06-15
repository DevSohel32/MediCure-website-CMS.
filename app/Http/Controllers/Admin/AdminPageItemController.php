<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageItem;

class AdminPageItemController extends Controller
{
    public function index()
    {
        $page_item = PageItem::where('id',1)->first();
        return view('admin.page_item.index', compact('page_item'));
    }
    public function update(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
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
        ]);

        $obj = PageItem::where('id',1)->first();

        if($request->home_about_photo1)
        {
            $request->validate([
                'home_about_photo1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'home_about_photo1_'.time().'.'.$request->home_about_photo1->extension();
            if($obj->home_about_photo1 != '') {
                unlink(public_path('uploads/'.$obj->home_about_photo1));
            }
            $request->home_about_photo1->move(public_path('uploads'), $final_name);
            $obj->home_about_photo1 = $final_name;
        }

        if($request->home_about_photo2)
        {
            $request->validate([
                'home_about_photo2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'home_about_photo2_'.time().'.'.$request->home_about_photo2->extension();
            if($obj->home_about_photo2 != '') {
                unlink(public_path('uploads/'.$obj->home_about_photo2));
            }
            $request->home_about_photo2->move(public_path('uploads'), $final_name);
            $obj->home_about_photo2 = $final_name;
        }

        if($request->home_video_photo)
        {
            $request->validate([
                'home_video_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'home_video_photo_'.time().'.'.$request->home_video_photo->extension();
            if($obj->home_video_photo != '') {
                unlink(public_path('uploads/'.$obj->home_video_photo));
            }
            $request->home_video_photo->move(public_path('uploads'), $final_name);
            $obj->home_video_photo = $final_name;
        }

        if($request->about_about_photo1)
        {
            $request->validate([
                'about_about_photo1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'about_about_photo1_'.time().'.'.$request->about_about_photo1->extension();
            if($obj->about_about_photo1 != '') {
                unlink(public_path('uploads/'.$obj->about_about_photo1));
            }
            $request->about_about_photo1->move(public_path('uploads'), $final_name);
            $obj->about_about_photo1 = $final_name;
        }

        if($request->about_about_photo2)
        {
            $request->validate([
                'about_about_photo2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'about_about_photo2_'.time().'.'.$request->about_about_photo2->extension();
            if($obj->about_about_photo2 != '') {
                unlink(public_path('uploads/'.$obj->about_about_photo2));
            }
            $request->about_about_photo2->move(public_path('uploads'), $final_name);
            $obj->about_about_photo2 = $final_name;
        }

        if($request->contact_map_photo)
        {
            $request->validate([
                'contact_map_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'contact_map_photo_'.time().'.'.$request->contact_map_photo->extension();
            if($obj->contact_map_photo != '') {
                unlink(public_path('uploads/'.$obj->contact_map_photo));
            }
            $request->contact_map_photo->move(public_path('uploads'), $final_name);
            $obj->contact_map_photo = $final_name;
        }

        if($request->appointment_form_photo)
        {
            $request->validate([
                'appointment_form_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'appointment_form_photo_'.time().'.'.$request->appointment_form_photo->extension();
            if($obj->appointment_form_photo != '') {
                unlink(public_path('uploads/'.$obj->appointment_form_photo));
            }
            $request->appointment_form_photo->move(public_path('uploads'), $final_name);
            $obj->appointment_form_photo = $final_name;
        }

        $obj->home_about_subheading = $request->home_about_subheading;
        $obj->home_about_heading = $request->home_about_heading;
        $obj->home_about_text = $request->home_about_text;
        $obj->home_about_list_items = $request->home_about_list_items;
        $obj->home_about_phone = $request->home_about_phone;
        $obj->home_about_button_text = $request->home_about_button_text;
        $obj->home_about_status = $request->home_about_status;

        $obj->home_feature_subheading = $request->home_feature_subheading;
        $obj->home_feature_heading = $request->home_feature_heading;
        $obj->home_feature_status = $request->home_feature_status;

        $obj->home_video_subheading = $request->home_video_subheading;
        $obj->home_video_heading = $request->home_video_heading;
        $obj->home_video_youtube = $request->home_video_youtube;
        $obj->home_video_status = $request->home_video_status;

        $obj->home_doctor_subheading = $request->home_doctor_subheading;
        $obj->home_doctor_heading = $request->home_doctor_heading;
        $obj->home_doctor_total = $request->home_doctor_total;
        $obj->home_doctor_status = $request->home_doctor_status;

        $obj->home_blog_subheading = $request->home_blog_subheading;
        $obj->home_blog_heading = $request->home_blog_heading;
        $obj->home_blog_total = $request->home_blog_total;
        $obj->home_blog_status = $request->home_blog_status;

        $obj->home_seo_title = $request->home_seo_title;
        $obj->home_seo_meta_description = $request->home_seo_meta_description;

        $obj->about_page_title = $request->about_page_title;
        $obj->about_about_subheading = $request->about_about_subheading;
        $obj->about_about_heading = $request->about_about_heading;
        $obj->about_about_text = $request->about_about_text;
        $obj->about_about_list_items = $request->about_about_list_items;
        $obj->about_about_phone = $request->about_about_phone;
        $obj->about_about_button_text = $request->about_about_button_text;
        $obj->about_about_status = $request->about_about_status;

        $obj->about_doctor_subheading = $request->about_doctor_subheading;
        $obj->about_doctor_heading = $request->about_doctor_heading;
        $obj->about_doctor_total = $request->about_doctor_total;
        $obj->about_doctor_status = $request->about_doctor_status;

        $obj->about_counter_status = $request->about_counter_status;

        $obj->about_seo_title = $request->about_seo_title;
        $obj->about_seo_meta_description = $request->about_seo_meta_description;

        $obj->services_page_title = $request->services_page_title;
        $obj->services_per_page = $request->services_per_page;
        $obj->services_seo_title = $request->services_seo_title;
        $obj->services_seo_meta_description = $request->services_seo_meta_description;

        $obj->service_widget_title = $request->service_widget_title;
        $obj->service_widget_text = $request->service_widget_text;
        $obj->service_widget_button_text = $request->service_widget_button_text;

        $obj->departments_page_title = $request->departments_page_title;
        $obj->departments_per_page = $request->departments_per_page;
        $obj->departments_seo_title = $request->departments_seo_title;
        $obj->departments_seo_meta_description = $request->departments_seo_meta_description;

        $obj->department_widget_title = $request->department_widget_title;
        $obj->department_widget_text = $request->department_widget_text;
        $obj->department_widget_button_text = $request->department_widget_button_text;
        $obj->department_cta_subheading = $request->department_cta_subheading;
        $obj->department_cta_heading = $request->department_cta_heading;
        $obj->department_cta_button_text = $request->department_cta_button_text;
        $obj->department_cta_status = $request->department_cta_status;

        $obj->doctors_page_title = $request->doctors_page_title;
        $obj->doctors_per_page = $request->doctors_per_page;
        $obj->doctors_seo_title = $request->doctors_seo_title;
        $obj->doctors_seo_meta_description = $request->doctors_seo_meta_description;

        $obj->faq_page_title = $request->faq_page_title;
        $obj->faq_seo_title = $request->faq_seo_title;
        $obj->faq_seo_meta_description = $request->faq_seo_meta_description;

        $obj->pricing_page_title = $request->pricing_page_title;
        $obj->pricing_seo_title = $request->pricing_seo_title;
        $obj->pricing_seo_meta_description = $request->pricing_seo_meta_description;

        $obj->photo_gallery_page_title = $request->photo_gallery_page_title;
        $obj->photo_gallery_seo_title = $request->photo_gallery_seo_title;
        $obj->photo_gallery_seo_meta_description = $request->photo_gallery_seo_meta_description;

        $obj->video_gallery_page_title = $request->video_gallery_page_title;
        $obj->video_gallery_seo_title = $request->video_gallery_seo_title;
        $obj->video_gallery_seo_meta_description = $request->video_gallery_seo_meta_description;

        $obj->contact_page_title = $request->contact_page_title;
        $obj->contact_form_subheading = $request->contact_form_subheading;
        $obj->contact_form_heading = $request->contact_form_heading;
        $obj->contact_form_button_text = $request->contact_form_button_text;
        $obj->contact_map_code = $request->contact_map_code;
        $obj->contact_map_phone_title = $request->contact_map_phone_title;
        $obj->contact_map_phone = $request->contact_map_phone;
        $obj->contact_map_email_title = $request->contact_map_email_title;
        $obj->contact_map_email = $request->contact_map_email;
        $obj->contact_map_address_title = $request->contact_map_address_title;
        $obj->contact_map_address = $request->contact_map_address;
        $obj->contact_map_status = $request->contact_map_status;
        $obj->contact_seo_title = $request->contact_seo_title;
        $obj->contact_seo_meta_description = $request->contact_seo_meta_description;

        $obj->appointment_page_title = $request->appointment_page_title;
        $obj->appointment_form_heading = $request->appointment_form_heading;
        $obj->appointment_form_button_text = $request->appointment_form_button_text;
        $obj->appointment_seo_title = $request->appointment_seo_title;
        $obj->appointment_seo_meta_description = $request->appointment_seo_meta_description;

        $obj->terms_page_title = $request->terms_page_title;
        $obj->terms_content = $request->terms_content;
        $obj->terms_seo_title = $request->terms_seo_title;
        $obj->terms_seo_meta_description = $request->terms_seo_meta_description;

        $obj->privacy_page_title = $request->privacy_page_title;
        $obj->privacy_content = $request->privacy_content;
        $obj->privacy_seo_title = $request->privacy_seo_title;
        $obj->privacy_seo_meta_description = $request->privacy_seo_meta_description;

        $obj->blog_page_title = $request->blog_page_title;
        $obj->blog_per_page = $request->blog_per_page;
        $obj->blog_seo_title = $request->blog_seo_title;
        $obj->blog_seo_meta_description = $request->blog_seo_meta_description;

        $obj->blog_detail_tag_status = $request->blog_detail_tag_status;
        $obj->blog_detail_share_status = $request->blog_detail_share_status;
        $obj->blog_detail_author_status = $request->blog_detail_author_status;
        $obj->blog_detail_comment_status = $request->blog_detail_comment_status;

        $obj->blog_category_page_title = $request->blog_category_page_title;
        $obj->blog_category_per_page = $request->blog_category_per_page;
        $obj->blog_category_seo_title = $request->blog_category_seo_title;
        $obj->blog_category_seo_meta_description = $request->blog_category_seo_meta_description;

        $obj->blog_tag_page_title = $request->blog_tag_page_title;
        $obj->blog_tag_per_page = $request->blog_tag_per_page;
        $obj->blog_tag_seo_title = $request->blog_tag_seo_title;
        $obj->blog_tag_seo_meta_description = $request->blog_tag_seo_meta_description;

        $obj->blog_search_page_title = $request->blog_search_page_title;
        $obj->blog_search_per_page = $request->blog_search_per_page;
        $obj->blog_search_seo_title = $request->blog_search_seo_title;
        $obj->blog_search_seo_meta_description = $request->blog_search_seo_meta_description;

        $obj->blog_sidebar_search_status = $request->blog_sidebar_search_status;
        $obj->blog_sidebar_category_status = $request->blog_sidebar_category_status;
        $obj->blog_sidebar_recent_post_total = $request->blog_sidebar_recent_post_total;
        $obj->blog_sidebar_recent_post_status = $request->blog_sidebar_recent_post_status;
        $obj->blog_sidebar_tag_status = $request->blog_sidebar_tag_status;

        $obj->save();

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }

}
