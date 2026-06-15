<?php

namespace Tests\Feature;

use App\Models\Department;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminDepartmentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test: Create a new department
     * Tests: Request → Route → Controller → Database
     */
    public function test_can_create_department()
    {
        $this->withoutMiddleware();
        Storage::fake('public');
        $icon = UploadedFile::fake()->image('dept.jpg');

        $deptData = [
            'title' => 'Cardiology Department',
            'slug' => 'cardiology-dept',
            'photo' => $icon,
            'description' => 'Heart and cardiovascular care',
            'table_name' => 'departments'
        ];

        $response = $this->post(route('admin_department_store'), $deptData);

        $response->assertStatus(302);

        $this->assertDatabaseHas('departments', [
            'title' => 'Cardiology Department',
            'slug' => 'cardiology-dept'
        ]);

        $dept = Department::where('slug', 'cardiology-dept')->first();
        $this->assertNotNull($dept);
    }

    /**
     * Test: View all departments
     * Tests: Request → Route → Controller → Database → View
     */
    public function test_can_view_departments_list()
    {
        $this->withoutMiddleware();
        Department::create([
            'title' => 'Surgery',
            'slug' => 'surgery',
            'description' => 'Surgical services'
        ]);

        Department::create([
            'title' => 'Pediatrics',
            'slug' => 'pediatrics',
            'description' => 'Child health'
        ]);

        $response = $this->get(route('admin_department_index'));

        $response->assertStatus(200);
        $response->assertViewHas('departments');
        $this->assertCount(2, $response->viewData('departments'));
    }

    /**
     * Test: Update a department
     * Tests: Request → Route → Controller → Database Update
     */
    public function test_can_update_department()
    {
        $this->withoutMiddleware();
        $dept = Department::create([
            'title' => 'Old Department',
            'slug' => 'old-dept',
            'description' => 'Old description'
        ]);

        $updateData = [
            'title' => 'New Department',
            'slug' => 'new-dept',
            'description' => 'New description',
            'table_name' => 'departments'
        ];

        $response = $this->post(route('admin_department_update', $dept->id), $updateData);

        $response->assertStatus(302);

        $this->assertDatabaseHas('departments', [
            'id' => $dept->id,
            'title' => 'New Department'
        ]);
    }

    /**
     * Test: Delete a department
     * Tests: Request → Route → Controller → Database Deletion
     */
    public function test_can_delete_department()
    {
        $this->withoutMiddleware();
        $dept = Department::create([
            'title' => 'Temp Department',
            'slug' => 'temp-dept',
            'description' => 'Temporary'
        ]);

        $response = $this->get(route('admin_department_destroy', $dept->id));

        $response->assertStatus(302);
        $this->assertDatabaseMissing('departments', ['id' => $dept->id]);
    }
}

