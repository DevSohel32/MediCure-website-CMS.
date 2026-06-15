<?php

namespace Tests\Feature;

use App\Models\Video;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminVideoTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test: Create a video entry
     * Tests: Request → Route → Controller → Database
     */
    public function test_can_create_video()
    {
        $this->withoutMiddleware();
        $videoData = [
            'caption' => 'Hospital Tour',
            'video' => 'https://youtube.com/watch?v=test123',
            'table_name' => 'videos'
        ];

        $response = $this->post(route('admin_video_store'), $videoData);

        $response->assertStatus(302);

        $this->assertDatabaseHas('videos', [
            'caption' => 'Hospital Tour',
            'video' => 'https://youtube.com/watch?v=test123'
        ]);
    }

    /**
     * Test: View all videos
     * Tests: Request → Route → Controller → Database → View
     */
    public function test_can_view_videos_list()
    {
        $this->withoutMiddleware();
        Video::create(['caption' => 'Video 1', 'video' => 'https://youtube.com/1']);
        Video::create(['caption' => 'Video 2', 'video' => 'https://youtube.com/2']);

        $response = $this->get(route('admin_video_index'));

        $response->assertStatus(200);
        $response->assertViewHas('videos');
        $this->assertCount(2, $response->viewData('videos'));
    }

    /**
     * Test: Update a video
     * Tests: Request → Route → Controller → Database Update
     */
    public function test_can_update_video()
    {
        $this->withoutMiddleware();
        $video = Video::create([
            'caption' => 'Old Title',
            'video' => 'https://old.com'
        ]);

        $updateData = [
            'caption' => 'New Title',
            'video' => 'https://new.com',
            'table_name' => 'videos'
        ];

        $response = $this->post(route('admin_video_update', $video->id), $updateData);

        $response->assertStatus(302);

        $this->assertDatabaseHas('videos', [
            'id' => $video->id,
            'caption' => 'New Title'
        ]);
    }

    /**
     * Test: Delete a video
     * Tests: Request → Route → Controller → Database Deletion
     */
    public function test_can_delete_video()
    {
        $this->withoutMiddleware();
        $video = Video::create([
            'caption' => 'Delete Video',
            'video' => 'https://delete.com'
        ]);

        $response = $this->get(route('admin_video_destroy', $video->id));

        $response->assertStatus(302);
        $this->assertDatabaseMissing('videos', ['id' => $video->id]);
    }
}

