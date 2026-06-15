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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('logo')->nullable();
            $table->text('logo_white')->nullable();
            $table->text('favicon')->nullable();
            $table->text('banner')->nullable();
            $table->text('not_found_photo')->nullable();
            $table->text('not_found_heading')->nullable();
            $table->text('not_found_text')->nullable();
            $table->text('not_found_button_text')->nullable();
            $table->text('not_found_button_status')->nullable();
            $table->text('top_bar_phone')->nullable();
            $table->text('top_bar_email')->nullable();
            $table->text('top_bar_faq_status')->nullable();
            $table->text('top_bar_contact_status')->nullable();
            $table->text('top_bar_facebook')->nullable();
            $table->text('top_bar_twitter')->nullable();
            $table->text('top_bar_linkedin')->nullable();
            $table->text('top_bar_instagram')->nullable();
            $table->text('footer_address_heading')->nullable();
            $table->text('footer_address')->nullable();
            $table->text('footer_phone_heading')->nullable();
            $table->text('footer_phone')->nullable();
            $table->text('footer_email_heading')->nullable();
            $table->text('footer_email')->nullable();
            $table->text('footer_facebook')->nullable();
            $table->text('footer_twitter')->nullable();
            $table->text('footer_instagram')->nullable();
            $table->text('footer_linkedin')->nullable();
            $table->text('footer_copyright')->nullable();
            $table->text('footer_column1_heading')->nullable();
            $table->text('footer_column1_text')->nullable();
            $table->text('footer_column2_heading')->nullable();
            $table->text('footer_column3_heading')->nullable();
            $table->text('footer_column4_heading')->nullable();
            $table->text('footer_column4_subscriber_text')->nullable();
            $table->text('footer_column4_subscriber_placeholder_text')->nullable();
            $table->text('footer_column4_subscriber_button_text')->nullable();
            $table->text('cookie_consent_message')->nullable();
            $table->text('cookie_consent_button_text')->nullable();
            $table->text('cookie_consent_text_color')->nullable();
            $table->text('cookie_consent_bg_color')->nullable();
            $table->text('cookie_consent_button_text_color')->nullable();
            $table->text('cookie_consent_button_bg_color')->nullable();
            $table->text('cookie_consent_status')->nullable();
            $table->text('google_analytic_measurement_id')->nullable();
            $table->text('google_analytic_status')->nullable();
            $table->text('tawk_live_chat_property_id')->nullable();
            $table->text('tawk_live_chat_status')->nullable();
            $table->text('sticky_header_status')->nullable();
            $table->text('preloader_photo')->nullable();
            $table->text('preloader_status')->nullable();
            $table->text('layout_direction')->nullable();
            $table->text('theme_color_1')->nullable();
            $table->text('theme_color_2')->nullable();
            $table->text('theme_color_3')->nullable();
            $table->text('currency_symbol')->nullable();
            $table->text('captcha_status')->nullable();
            $table->text('maintenance_mode_heading')->nullable();
            $table->text('maintenance_mode_text')->nullable();
            $table->text('maintenance_mode_logo_status')->nullable();
            $table->text('maintenance_mode_status')->nullable();
            $table->text('maintenance_mode_countdown_heading')->nullable();
            $table->date('maintenance_mode_countdown_date')->nullable();
            $table->time('maintenance_mode_countdown_time')->nullable();
            $table->text('maintenance_mode_countdown_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
