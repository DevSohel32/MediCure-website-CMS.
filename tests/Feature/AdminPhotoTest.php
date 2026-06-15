<?php

namespace Tests\Feature;

use App\Models\Photo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminPhotoTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test: Create a photo with upload
     * Tests: Request → Route → Controller → Database + File Upload
     */
    public function test_can_create_photo()
    {
        $this->withoutMiddleware();
        Storage::fake('public');
        $photoFile = UploadedFile::fake()->image('gallery.jpg');

        $photoData = [
            'caption' => 'Hospital Gallery',
            'photo' => $photoFile,
            'table_name' => 'photos'
        ];

        $response = $this->post(route('admin_photo_store'), $photoData);

        $response->assertStatus(302);

        $this->assertDatabaseHas('photos', [
            'caption' => 'Hospital Gallery'
        ]);

        $photo = Photo::where('caption', 'Hospital Gallery')->first();
        $this->assertNotNull($photo->photo);
    }

    /**
     * Test: View all photos
     * Tests: Request → Route → Controller → Database → View
     */
    public function test_can_view_photos_list()
    {
        $this->withoutMiddleware();
        Photo::create(['caption' => 'Photo 1', 'photo' => 'photo1.jpg']);
        Photo::create(['caption' => 'Photo 2', 'photo' => 'photo2.jpg']);

        $response = $this->get(route('admin_photo_index'));

        $response->assertStatus(200);
        $response->assertViewHas('photos');
        $this->assertCount(2, $response->viewData('photos'));
    }

    /**
     * Test: Update a photo
     * Tests: Request → Route → Controller → Database Update
     */
    public function test_can_update_photo()
    {
        $this->withoutMiddleware();
        $photo = Photo::create([
            'caption' => 'Old Caption',
            'photo' => 'old.jpg'
        ]);

        $updateData = [
            'caption' => 'New Caption',
            'table_name' => 'photos'
        ];

        $response = $this->post(route('admin_photo_update', $photo->id), $updateData);

        $response->assertStatus(302);

        $this->assertDatabaseHas('photos', [
            'id' => $photo->id,
            'caption' => 'New Caption'
        ]);
    }

    /**
     * Test: Delete a photo
     * Tests: Request → Route → Controller → Database Deletion
     */
    public function test_can_delete_photo()
    {
        $this->withoutMiddleware();
        $photo = Photo::create([
            'caption' => 'Delete This',
            'photo' => 'delete.jpg'
        ]);

        $response = $this->get(route('admin_photo_destroy', $photo->id));

        $response->assertStatus(302);
        $this->assertDatabaseMissing('photos', ['id' => $photo->id]);
    }
}

