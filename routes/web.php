<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontAndBackEndBladeExtractController;

use App\Http\Controllers\Front\FrontController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Admin\AdminVideoController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminPostCategoryController;
use App\Http\Controllers\Admin\AdminPageItemController;
use App\Http\Controllers\Admin\AdminSubscriberController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminDoctorController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminCounterItemController;
use App\Http\Controllers\Admin\AdminDepartmentController;
use App\Http\Controllers\Admin\AdminPackageController;
use App\Http\Controllers\Admin\AdminTranslationController;
use App\Http\Controllers\Admin\AdminMenuController;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/service/{slug}', [FrontController::class, 'service'])->name('service');
Route::get('/departments', [FrontController::class, 'departments'])->name('departments');
Route::get('/department/{slug}', [FrontController::class, 'department'])->name('department');
Route::get('/doctors', [FrontController::class, 'doctors'])->name('doctors');
Route::get('/doctor/{slug}', [FrontController::class, 'doctor'])->name('doctor');
Route::get('/pricing', [FrontController::class, 'pricing'])->name('pricing');
Route::get('/photo-gallery', [FrontController::class, 'photo_gallery'])->name('photo_gallery');
Route::get('/video-gallery', [FrontController::class, 'video_gallery'])->name('video_gallery');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/post/{slug}', [FrontController::class, 'post'])->name('post');
Route::get('/category/{slug}', [FrontController::class, 'category'])->name('category');
Route::get('/tag/{name}', [FrontController::class, 'tag'])->name('tag');
Route::post('/comment-submit', [FrontController::class, 'comment_submit'])->name('comment_submit');
Route::post('/reply-submit', [FrontController::class, 'reply_submit'])->name('reply_submit');
Route::get('/search', [FrontController::class, 'search'])->name('search');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/contact-send-email', [FrontController::class, 'contact_send_email'])->name('contact_send_email');
Route::get('/appointment', [FrontController::class, 'appointment'])->name('appointment');
Route::post('/appointment-send-email', [FrontController::class, 'appointment_send_email'])->name('appointment_send_email');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');
Route::get('/terms', [FrontController::class, 'terms'])->name('terms');
Route::get('/privacy', [FrontController::class, 'privacy'])->name('privacy');
Route::post('/subscriber/send-email', [FrontController::class, 'subscriber_send_email'])->name('subscriber_send_email');
Route::get('/subscriber/verify/{email}/{token}', [FrontController::class, 'subscriber_verify'])->name('subscriber_verify');


// Admin
Route::middleware('admin')->prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin_profile');
    Route::post('/profile', [AdminController::class, 'profile_submit'])->name('admin_profile_submit');
    

    Route::get('/faq/index', [AdminFaqController::class, 'index'])->name('admin_faq_index');
    Route::get('/faq/create', [AdminFaqController::class, 'create'])->name('admin_faq_create');
    Route::post('/faq/store', [AdminFaqController::class, 'store'])->name('admin_faq_store');
    Route::get('/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin_faq_edit');
    Route::post('/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin_faq_update');
    Route::get('/faq/destroy/{id}', [AdminFaqController::class, 'destroy'])->name('admin_faq_destroy');

    Route::get('/photo/index', [AdminPhotoController::class, 'index'])->name('admin_photo_index');
    Route::get('/photo/create', [AdminPhotoController::class, 'create'])->name('admin_photo_create');
    Route::post('/photo/store', [AdminPhotoController::class, 'store'])->name('admin_photo_store');
    Route::get('/photo/edit/{id}', [AdminPhotoController::class, 'edit'])->name('admin_photo_edit');
    Route::post('/photo/update/{id}', [AdminPhotoController::class, 'update'])->name('admin_photo_update');
    Route::get('/photo/destroy/{id}', [AdminPhotoController::class, 'destroy'])->name('admin_photo_destroy');

    Route::get('/video/index', [AdminVideoController::class, 'index'])->name('admin_video_index');
    Route::get('/video/create', [AdminVideoController::class, 'create'])->name('admin_video_create');
    Route::post('/video/store', [AdminVideoController::class, 'store'])->name('admin_video_store');
    Route::get('/video/edit/{id}', [AdminVideoController::class, 'edit'])->name('admin_video_edit');
    Route::post('/video/update/{id}', [AdminVideoController::class, 'update'])->name('admin_video_update');
    Route::get('/video/destroy/{id}', [AdminVideoController::class, 'destroy'])->name('admin_video_destroy');

    Route::get('/slider/index', [AdminSliderController::class, 'index'])->name('admin_slider_index');
    Route::get('/slider/create', [AdminSliderController::class, 'create'])->name('admin_slider_create');
    Route::post('/slider/store', [AdminSliderController::class, 'store'])->name('admin_slider_store');
    Route::get('/slider/edit/{id}', [AdminSliderController::class, 'edit'])->name('admin_slider_edit');
    Route::post('/slider/update/{id}', [AdminSliderController::class, 'update'])->name('admin_slider_update');
    Route::get('/slider/destroy/{id}', [AdminSliderController::class, 'destroy'])->name('admin_slider_destroy');

    Route::get('/post-category/index', [AdminPostCategoryController::class, 'index'])->name('admin_post_category_index');
    Route::get('/post-category/create', [AdminPostCategoryController::class, 'create'])->name('admin_post_category_create');
    Route::post('/post-category/store', [AdminPostCategoryController::class, 'store'])->name('admin_post_category_store');
    Route::get('/post-category/edit/{id}', [AdminPostCategoryController::class, 'edit'])->name('admin_post_category_edit');
    Route::post('/post-category/update/{id}', [AdminPostCategoryController::class, 'update'])->name('admin_post_category_update');
    Route::get('/post-category/destroy/{id}', [AdminPostCategoryController::class, 'destroy'])->name('admin_post_category_destroy');

    Route::get('/post/index', [AdminPostController::class, 'index'])->name('admin_post_index');
    Route::get('/post/create', [AdminPostController::class, 'create'])->name('admin_post_create');
    Route::post('/post/store', [AdminPostController::class, 'store'])->name('admin_post_store');
    Route::get('/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin_post_edit');
    Route::post('/post/update/{id}', [AdminPostController::class, 'update'])->name('admin_post_update');
    Route::get('/post/destroy/{id}', [AdminPostController::class, 'destroy'])->name('admin_post_destroy');
    Route::get('/comments', [AdminPostController::class, 'comment'])->name('admin_comment');
    Route::get('/comments/delete/{id}', [AdminPostController::class, 'comment_delete'])->name('admin_comment_delete');
    Route::get('/comments/status-change/{id}', [AdminPostController::class, 'comment_status_change'])->name('admin_comment_status_change');
    Route::get('/replies', [AdminPostController::class, 'reply'])->name('admin_reply');
    Route::get('/replies/delete/{id}', [AdminPostController::class, 'reply_delete'])->name('admin_reply_delete');
    Route::get('/replies/status-change/{id}', [AdminPostController::class, 'reply_status_change'])->name('admin_reply_status_change');
    Route::post('/reply-submit', [AdminPostController::class, 'reply_submit'])->name('admin_reply_submit');

    Route::get('/service/index', [AdminServiceController::class, 'index'])->name('admin_service_index');
    Route::get('/service/create', [AdminServiceController::class, 'create'])->name('admin_service_create');
    Route::post('/service/store', [AdminServiceController::class, 'store'])->name('admin_service_store');
    Route::get('/service/edit/{id}', [AdminServiceController::class, 'edit'])->name('admin_service_edit');
    Route::post('/service/update/{id}', [AdminServiceController::class, 'update'])->name('admin_service_update');
    Route::get('/service/destroy/{id}', [AdminServiceController::class, 'destroy'])->name('admin_service_destroy');

    Route::get('/feature/index', [AdminFeatureController::class, 'index'])->name('admin_feature_index');
    Route::get('/feature/create', [AdminFeatureController::class, 'create'])->name('admin_feature_create');
    Route::post('/feature/store', [AdminFeatureController::class, 'store'])->name('admin_feature_store');
    Route::get('/feature/edit/{id}', [AdminFeatureController::class, 'edit'])->name('admin_feature_edit');
    Route::post('/feature/update/{id}', [AdminFeatureController::class, 'update'])->name('admin_feature_update');
    Route::get('/feature/destroy/{id}', [AdminFeatureController::class, 'destroy'])->name('admin_feature_destroy');

    Route::get('/department/index', [AdminDepartmentController::class, 'index'])->name('admin_department_index');
    Route::get('/department/create', [AdminDepartmentController::class, 'create'])->name('admin_department_create');
    Route::post('/department/store', [AdminDepartmentController::class, 'store'])->name('admin_department_store');
    Route::get('/department/edit/{id}', [AdminDepartmentController::class, 'edit'])->name('admin_department_edit');
    Route::post('/department/update/{id}', [AdminDepartmentController::class, 'update'])->name('admin_department_update');
    Route::get('/department/destroy/{id}', [AdminDepartmentController::class, 'destroy'])->name('admin_department_destroy');

    Route::get('/package/index', [AdminPackageController::class, 'index'])->name('admin_package_index');
    Route::get('/package/create', [AdminPackageController::class, 'create'])->name('admin_package_create');
    Route::post('/package/store', [AdminPackageController::class, 'store'])->name('admin_package_store');
    Route::get('/package/edit/{id}', [AdminPackageController::class, 'edit'])->name('admin_package_edit');
    Route::post('/package/update/{id}', [AdminPackageController::class, 'update'])->name('admin_package_update');
    Route::get('/package/destroy/{id}', [AdminPackageController::class, 'destroy'])->name('admin_package_destroy');
    Route::get('/package/feature/index/{id}', [AdminPackageController::class, 'features'])->name('admin_package_feature_index');
    Route::post('/package/feature/store/{id}', [AdminPackageController::class, 'feature_store'])->name('admin_package_feature_store');
    Route::get('/package/feature/destroy/{id}', [AdminPackageController::class, 'feature_destroy'])->name('admin_package_feature_destroy');

    Route::get('/doctor/index', [AdminDoctorController::class, 'index'])->name('admin_doctor_index');
    Route::get('/doctor/create', [AdminDoctorController::class, 'create'])->name('admin_doctor_create');
    Route::post('/doctor/store', [AdminDoctorController::class, 'store'])->name('admin_doctor_store');
    Route::get('/doctor/edit/{id}', [AdminDoctorController::class, 'edit'])->name('admin_doctor_edit');
    Route::post('/doctor/update/{id}', [AdminDoctorController::class, 'update'])->name('admin_doctor_update');
    Route::get('/doctor/destroy/{id}', [AdminDoctorController::class, 'destroy'])->name('admin_doctor_destroy');

    Route::get('/page-item/index', [AdminPageItemController::class, 'index'])->name('admin_page_item_index');
    Route::post('/page-item/update', [AdminPageItemController::class, 'update'])->name('admin_page_item_update');

    Route::get('/subscriber/index', [AdminSubscriberController::class, 'index'])->name('admin_subscriber_index');
    Route::get('/subscriber/destroy/{id}', [AdminSubscriberController::class, 'destroy'])->name('admin_subscriber_destroy');
    Route::get('/subscriber/export', [AdminSubscriberController::class, 'export'])->name('admin_subscriber_export');

    Route::get('/setting/index', [AdminSettingController::class, 'index'])->name('admin_setting_index');
    Route::post('/setting/update', [AdminSettingController::class, 'update'])->name('admin_setting_update');

    Route::get('/counter-item/index', [AdminCounterItemController::class, 'index'])->name('admin_counter_item_index');
    Route::post('/counter-item/update', [AdminCounterItemController::class, 'update'])->name('admin_counter_item_update');

    Route::get('/translation/index', [AdminTranslationController::class,'index'])->name('admin_translation_index');
    Route::post('/translation/update', [AdminTranslationController::class,'update'])->name('admin_translation_update');

    Route::get('/menu/index',[AdminMenuController::class,'index'])->name('admin_menu_index');
    Route::post('/menu/update',[AdminMenuController::class,'update'])->name('admin_menu_update');
});

Route::prefix('admin')->group(function(){
    Route::get('/', function () {return redirect()->route('admin_login');});
    Route::get('/login', [AdminController::class, 'login'])->name('admin_login');
    Route::post('/login', [AdminController::class, 'login_submit'])->name('admin_login_submit');
    Route::get('/forget-password', [AdminController::class, 'forget_password'])->name('admin_forget_password');
    Route::post('/forget-password', [AdminController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
    Route::get('/reset-password/{token}/{email}', [AdminController::class, 'reset_password'])->name('admin_reset_password');
    Route::post('/reset-password/{token}/{email}', [AdminController::class, 'reset_password_submit'])->name('admin_reset_password_submit');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');
});

Route::get('/all-blade-extract', [FrontAndBackEndBladeExtractController::class, 'index']);
