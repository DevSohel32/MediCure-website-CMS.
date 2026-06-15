<?php

namespace Tests\Feature;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test: Create a new service with image
     * Tests: Request → Route → Controller → Database + File Upload
     */
    public function test_can_create_service()
    {
        $this->withoutMiddleware();
        Storage::fake('public');
        $image = UploadedFile::fake()->image('service.jpg');

        $serviceData = [
            'name' => 'Heart Surgery',
            'slug' => 'heart-surgery',
            'photo' => $image,
            'short_description' => 'Expert heart surgery',
            'description' => 'We provide world-class heart surgery services',
            'table_name' => 'services'
        ];

        $response = $this->post(route('admin_service_store'), $serviceData);

        $response->assertStatus(302);

        $this->assertDatabaseHas('services', [
            'name' => 'Heart Surgery',
            'slug' => 'heart-surgery'
        ]);

        $service = Service::where('slug', 'heart-surgery')->first();
        $this->assertNotNull($service);
    }

    /**
     * Test: View all services
     * Tests: Request → Route → Controller → Database → View
     */
    public function test_can_view_services_list()
    {
        $this->setupDefaultTestData();
        $this->withoutMiddleware();

        Service::create([
            'name' => 'Cardiology',
            'slug' => 'cardiology',
            'description' => 'Heart care'
        ]);

        Service::create([
            'name' => 'Neurology',
            'slug' => 'neurology',
            'description' => 'Brain care'
        ]);

        $response = $this->get(route('admin_service_index'));

        $response->assertStatus(200);
        $response->assertViewHas('services');
        $services = $response->viewData('services');
        $this->assertCount(2, $services);
    }

    /**
     * Test: Update a service
     * Tests: Request → Route → Controller → Database Update
     */
    public function test_can_update_service()
    {
        $this->withoutMiddleware();
        $service = Service::create([
            'name' => 'Old Service',
            'slug' => 'old-service',
            'description' => 'Old description'
        ]);

        $updateData = [
            'name' => 'Updated Service',
            'slug' => 'updated-service',
            'description' => 'New description',
            'table_name' => 'services'
        ];

        $response = $this->post(route('admin_service_update', $service->id), $updateData);

        $response->assertStatus(302);

        $this->assertDatabaseHas('services', [
            'id' => $service->id,
            'name' => 'Updated Service'
        ]);
    }

    /**
     * Test: Delete a service
     * Tests: Request → Route → Controller → Database Deletion
     */
    public function test_can_delete_service()
    {
        $this->withoutMiddleware();
        $service = Service::create([
            'name' => 'Delete Service',
            'slug' => 'delete-service',
            'description' => 'To be deleted'
        ]);

        $this->assertDatabaseHas('services', ['id' => $service->id]);

        $response = $this->get(route('admin_service_destroy', $service->id));

        $response->assertStatus(302);
        $this->assertDatabaseMissing('services', ['id' => $service->id]);
    }
}

