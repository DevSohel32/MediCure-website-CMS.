<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminPostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test: Create a new post with complete flow
     * Tests: Request → Route → Controller → Database
     */
    public function test_can_create_post()
    {
        $this->withoutMiddleware();
        Storage::fake('public');

        // Create a post category first
        $category = PostCategory::create([
            'name' => 'Tech News',
            'slug' => 'tech-news'
        ]);

        $photo = UploadedFile::fake()->image('post.jpg');

        // Prepare post data
        $postData = [
            'title' => 'Test Post Title',
            'slug' => 'test-post-title',
            'post_category_id' => $category->id,
            'short_description' => 'Short description',
            'description' => 'This is a long description',
            'photo' => $photo,
            'tags' => 'test, laravel, feature-test',
            'table_name' => 'posts'
        ];

        // Send POST request to create route
        $response = $this->post(route('admin_post_store'), $postData);

        // Verify redirect response
        $response->assertStatus(302);

        // Verify data saved to database
        $this->assertDatabaseHas('posts', [
            'title' => 'Test Post Title',
            'slug' => 'test-post-title',
            'post_category_id' => $category->id
        ]);

        // Verify the post exists in database
        $post = Post::where('slug', 'test-post-title')->first();
        $this->assertNotNull($post);
        $this->assertEquals('Test Post Title', $post->title);
        $this->assertStringContainsString('test', $post->tags);
    }

    /**
     * Test: Get all posts from database
     * Tests: Request → Route → Controller → Database → View
     */
    public function test_can_view_posts_list()
    {
        $this->withoutMiddleware();
        // Create test posts in database
        $category = PostCategory::create([
            'name' => 'Health',
            'slug' => 'health'
        ]);

        Post::create([
            'title' => 'Post 1',
            'slug' => 'post-1',
            'post_category_id' => $category->id,
            'description' => 'Description 1'
        ]);

        Post::create([
            'title' => 'Post 2',
            'slug' => 'post-2',
            'post_category_id' => $category->id,
            'description' => 'Description 2'
        ]);

        // Make request to get posts
        $response = $this->get(route('admin_post_index'));

        // Verify response
        $response->assertStatus(200);
        $response->assertViewIs('admin.post.index');

        // Verify database data is passed to view
        $response->assertViewHas('posts');
        $posts = $response->viewData('posts');
        $this->assertCount(2, $posts);
    }

    /**
     * Test: Update an existing post
     * Tests: Request → Route → Controller → Database Update
     */
    public function test_can_update_post()
    {
        $this->withoutMiddleware();
        // Create initial post
        $category = PostCategory::create([
            'name' => 'News',
            'slug' => 'news'
        ]);

        $post = Post::create([
            'title' => 'Original Title',
            'slug' => 'original-title',
            'post_category_id' => $category->id,
            'description' => 'Original description'
        ]);

        // Prepare updated data
        $updatedData = [
            'title' => 'Updated Title',
            'slug' => 'updated-title',
            'post_category_id' => $category->id,
            'description' => 'Updated description',
            'table_name' => 'posts'
        ];

        // Send update request
        $response = $this->post(route('admin_post_update', $post->id), $updatedData);

        // Verify redirect
        $response->assertStatus(302);
        $response->assertSessionHas('success');

        // Verify database was updated
        $this->assertDatabaseHas('posts', [
            'id' => $post->id,
            'title' => 'Updated Title',
            'description' => 'Updated description'
        ]);

        // Verify old data no longer exists
        $this->assertDatabaseMissing('posts', [
            'id' => $post->id,
            'title' => 'Original Title'
        ]);
    }

    /**
     * Test: Delete a post
     * Tests: Request → Route → Controller → Database Deletion
     */
    public function test_can_delete_post()
    {
        $this->withoutMiddleware();
        // Create a post
        $category = PostCategory::create([
            'name' => 'Tech',
            'slug' => 'tech'
        ]);

        $post = Post::create([
            'title' => 'Delete Me',
            'slug' => 'delete-me',
            'post_category_id' => $category->id,
            'description' => 'To be deleted'
        ]);

        // Verify post exists
        $this->assertDatabaseHas('posts', ['id' => $post->id]);

        // Send delete request
        $response = $this->get(route('admin_post_destroy', $post->id));

        // Verify redirect
        $response->assertStatus(302);
        $response->assertSessionHas('success');

        // Verify post is deleted from database
        $this->assertDatabaseMissing('posts', ['id' => $post->id]);
    }

    /**
     * Test: Post validation rules
     * Tests: Request validation before reaching controller
     */
    public function test_post_validation_fails_without_required_fields()
    {
        $this->withoutMiddleware();
        // Send empty request
        $response = $this->post(route('admin_post_store'), []);

        // Should fail validation
        $response->assertStatus(302);
    }

    /**
     * Test: Create post with relationships
     * Tests: Request → Route → Controller → Database with FK constraint
     */
    public function test_post_has_category_relationship()
    {
        $this->withoutMiddleware();
        // Create category
        $category = PostCategory::create([
            'name' => 'Medical',
            'slug' => 'medical'
        ]);

        // Create post linked to category
        $post = Post::create([
            'title' => 'Medical Info',
            'slug' => 'medical-info',
            'post_category_id' => $category->id,
            'description' => 'Medical description'
        ]);

        // Verify relationship
        $this->assertNotNull($post->post_category);
        $this->assertEquals($category->id, $post->post_category->id);
        $this->assertEquals('Medical', $post->post_category->name);
    }

    /**
     * Test: Check timestamps are automatically set
     * Tests: Database timestamps (created_at, updated_at)
     */
    public function test_post_timestamps_are_set()
    {
        $this->withoutMiddleware();
        $category = PostCategory::create([
            'name' => 'General',
            'slug' => 'general'
        ]);

        $post = Post::create([
            'title' => 'Test',
            'slug' => 'test',
            'post_category_id' => $category->id,
            'description' => 'Description'
        ]);

        $this->assertNotNull($post->created_at);
        $this->assertNotNull($post->updated_at);
        $this->assertTrue($post->created_at->equalTo($post->updated_at));
    }
}

