<?php

namespace Tests;

use App\Models\Setting;
use App\Models\PageItem;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Setup default test data needed for views
     */
    protected function setupDefaultTestData()
    {
        // Create default settings
        if (!Setting::where('id', 1)->exists()) {
            Setting::create([
                'id' => 1,
                'site_title' => 'Test Site',
                'site_email' => 'test@example.com',
                'site_phone' => '1234567890',
                'home_blog_total' => 3,
                'home_testimonial_total' => 3
            ]);
        }

        // Create default page item
        if (!PageItem::where('id', 1)->exists()) {
            PageItem::create([
                'id' => 1,
                'photo' => 'default.jpg',
                'title' => 'Test Page',
                'details' => 'Test details'
            ]);
        }
    }
}
