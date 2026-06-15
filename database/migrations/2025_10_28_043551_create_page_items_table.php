<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page_items', function (Blueprint $table) {
            $table->id();
            $table->text('home_about_subheading')->nullable();
            $table->text('home_about_heading')->nullable();
            $table->text('home_about_text')->nullable();
            $table->text('home_about_list_items')->nullable();
            $table->text('home_about_phone')->nullable();
            $table->text('home_about_photo1')->nullable();
            $table->text('home_about_photo2')->nullable();
            $table->text('home_about_button_text')->nullable();
            $table->text('home_about_status')->nullable();
            $table->text('home_feature_subheading')->nullable();
            $table->text('home_feature_heading')->nullable();
            $table->text('home_feature_status')->nullable();
            $table->text('home_video_subheading')->nullable();
            $table->text('home_video_heading')->nullable();
            $table->text('home_video_photo')->nullable();
            $table->text('home_video_youtube')->nullable();
            $table->text('home_video_status')->nullable();
            $table->text('home_doctor_subheading')->nullable();
            $table->text('home_doctor_heading')->nullable();
            $table->text('home_doctor_total')->nullable();
            $table->text('home_doctor_status')->nullable();
            $table->text('home_blog_subheading')->nullable();
            $table->text('home_blog_heading')->nullable();
            $table->text('home_blog_total')->nullable();
            $table->text('home_blog_status')->nullable();
            $table->text('home_seo_title')->nullable();
            $table->text('home_seo_meta_description')->nullable();

            $table->text('about_page_title')->nullable();
            $table->text('about_about_subheading')->nullable();
            $table->text('about_about_heading')->nullable();
            $table->text('about_about_text')->nullable();
            $table->text('about_about_list_items')->nullable();
            $table->text('about_about_phone')->nullable();
            $table->text('about_about_photo1')->nullable();
            $table->text('about_about_photo2')->nullable();
            $table->text('about_about_button_text')->nullable();
            $table->text('about_about_button_link')->nullable();
            $table->text('about_about_status')->nullable();
            $table->text('about_doctor_subheading')->nullable();
            $table->text('about_doctor_heading')->nullable();
            $table->text('about_doctor_total')->nullable();
            $table->text('about_doctor_status')->nullable();
            $table->text('about_counter_status')->nullable();
            $table->text('about_seo_title')->nullable();
            $table->text('about_seo_meta_description')->nullable();

            $table->text('services_page_title')->nullable();
            $table->text('services_per_page')->nullable();
            $table->text('services_seo_title')->nullable();
            $table->text('services_seo_meta_description')->nullable();

            $table->text('service_widget_title')->nullable();
            $table->text('service_widget_text')->nullable();
            $table->text('service_widget_button_text')->nullable();

            $table->text('departments_page_title')->nullable();
            $table->text('departments_per_page')->nullable();
            $table->text('departments_seo_title')->nullable();
            $table->text('departments_seo_meta_description')->nullable();

            $table->text('department_widget_title')->nullable();
            $table->text('department_widget_text')->nullable();
            $table->text('department_widget_button_text')->nullable();
            $table->text('department_cta_subheading')->nullable();
            $table->text('department_cta_heading')->nullable();
            $table->text('department_cta_button_text')->nullable();
            $table->text('department_cta_status')->nullable();

            $table->text('doctors_page_title')->nullable();
            $table->text('doctors_per_page')->nullable();
            $table->text('doctors_seo_title')->nullable();
            $table->text('doctors_seo_meta_description')->nullable();

            $table->text('faq_page_title')->nullable();
            $table->text('faq_seo_title')->nullable();
            $table->text('faq_seo_meta_description')->nullable();

            $table->text('pricing_page_title')->nullable();
            $table->text('pricing_seo_title')->nullable();
            $table->text('pricing_seo_meta_description')->nullable();

            $table->text('photo_gallery_page_title')->nullable();
            $table->text('photo_gallery_seo_title')->nullable();
            $table->text('photo_gallery_seo_meta_description')->nullable();

            $table->text('video_gallery_page_title')->nullable();
            $table->text('video_gallery_seo_title')->nullable();
            $table->text('video_gallery_seo_meta_description')->nullable();

            $table->text('contact_page_title')->nullable();
            $table->text('contact_form_subheading')->nullable();
            $table->text('contact_form_heading')->nullable();
            $table->text('contact_form_button_text')->nullable();
            $table->text('contact_map_code')->nullable();
            $table->text('contact_map_photo')->nullable();
            $table->text('contact_map_phone_title')->nullable();
            $table->text('contact_map_phone')->nullable();
            $table->text('contact_map_email_title')->nullable();
            $table->text('contact_map_email')->nullable();
            $table->text('contact_map_address_title')->nullable();
            $table->text('contact_map_address')->nullable();
            $table->text('contact_map_status')->nullable();
            $table->text('contact_seo_title')->nullable();
            $table->text('contact_seo_meta_description')->nullable();

            $table->text('appointment_page_title')->nullable();
            $table->text('appointment_form_heading')->nullable();
            $table->text('appointment_form_photo')->nullable();
            $table->text('appointment_form_button_text')->nullable();
            $table->text('appointment_seo_title')->nullable();
            $table->text('appointment_seo_meta_description')->nullable();

            $table->text('blog_page_title')->nullable();
            $table->text('blog_per_page')->nullable();
            $table->text('blog_seo_title')->nullable();
            $table->text('blog_seo_meta_description')->nullable();

            $table->text('blog_category_page_title')->nullable();
            $table->text('blog_category_per_page')->nullable();
            $table->text('blog_category_seo_title')->nullable();
            $table->text('blog_category_seo_meta_description')->nullable();

            $table->text('blog_tag_page_title')->nullable();
            $table->text('blog_tag_per_page')->nullable();
            $table->text('blog_tag_seo_title')->nullable();
            $table->text('blog_tag_seo_meta_description')->nullable();

            $table->text('blog_search_page_title')->nullable();
            $table->text('blog_search_per_page')->nullable();
            $table->text('blog_search_seo_title')->nullable();
            $table->text('blog_search_seo_meta_description')->nullable();

            $table->text('blog_detail_tag_status')->nullable();
            $table->text('blog_detail_share_status')->nullable();
            $table->text('blog_detail_author_status')->nullable();
            $table->text('blog_detail_comment_status')->nullable();

            $table->text('blog_sidebar_search_status')->nullable();
            $table->text('blog_sidebar_category_status')->nullable();
            $table->text('blog_sidebar_recent_post_total')->nullable();
            $table->text('blog_sidebar_recent_post_status')->nullable();
            $table->text('blog_sidebar_tag_status')->nullable();

            $table->text('terms_page_title')->nullable();
            $table->text('terms_content')->nullable();
            $table->text('terms_seo_title')->nullable();
            $table->text('terms_seo_meta_description')->nullable();

            $table->text('privacy_page_title')->nullable();
            $table->text('privacy_content')->nullable();
            $table->text('privacy_seo_title')->nullable();
            $table->text('privacy_seo_meta_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_items');
    }
};
