<?php

namespace Tests\Feature;

use App\Models\Doctor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminDoctorTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test: Create a new doctor with photo upload
     * Tests: Request → Route → Controller → Database + File Upload
     */
    public function test_can_create_doctor()
    {
        $this->withoutMiddleware();
        // Disable middleware for testing
        $this->withoutMiddleware();

        // Fake storage
        Storage::fake('public');

        // Create fake photo
        $photo = UploadedFile::fake()->image('doctor.jpg');

        // Prepare doctor data
        $doctorData = [
            'name' => 'Dr. Ahmed Khan',
            'slug' => 'dr-ahmed-khan',
            'designation' => 'Cardiologist',
            'biography' => 'Dr. Ahmed Khan is an experienced cardiologist',
            'photo' => $photo,
            'email' => 'ahmed@example.com',
            'phone' => '01234567890',
            'facebook' => 'facebook.com/ahmed',
            'twitter' => 'twitter.com/ahmed',
            'linkedin' => 'linkedin.com/in/ahmed',
            'instagram' => 'instagram.com/ahmed',
            'seo_title' => 'Dr. Ahmed Khan - Cardiologist',
            'seo_meta_description' => 'Best cardiologist in the city'
        ];

        // Send POST request
        $response = $this->post(route('admin_doctor_store'), $doctorData);

        // Verify redirect response (status 302 = redirect)
        $response->assertStatus(302);

        // Verify data saved to database
        $this->assertDatabaseHas('doctors', [
            'name' => 'Dr. Ahmed Khan',
            'slug' => 'dr-ahmed-khan',
            'designation' => 'Cardiologist',
            'email' => 'ahmed@example.com'
        ]);

        // Verify photo was saved
        $doctor = Doctor::where('slug', 'dr-ahmed-khan')->first();
        $this->assertNotNull($doctor->photo);
        $this->assertStringStartsWith('doctor_', $doctor->photo);
    }

    /**
     * Test: Get all doctors from database
     * Tests: Request → Route → Controller → Database → View
     */
    public function test_can_view_doctors_list()
    {
        $this->withoutMiddleware();
        // Create test doctors
        Doctor::create([
            'name' => 'Dr. Sara Ali',
            'slug' => 'dr-sara-ali',
            'designation' => 'Dentist',
            'biography' => 'Expert dentist',
            'photo' => 'doctor_1.jpg'
        ]);

        Doctor::create([
            'name' => 'Dr. Hassan Khan',
            'slug' => 'dr-hassan-khan',
            'designation' => 'Neurologist',
            'biography' => 'Expert neurologist',
            'photo' => 'doctor_2.jpg'
        ]);

        // Make request to view doctors
        $response = $this->get(route('admin_doctor_index'));

        // Verify response
        $response->assertStatus(200);
        $response->assertViewIs('admin.doctor.index');

        // Verify database data in view
        $response->assertViewHas('doctors');
        $doctors = $response->viewData('doctors');
        $this->assertCount(2, $doctors);
    }

    /**
     * Test: Update doctor information
     * Tests: Request → Route → Controller → Database Update
     */
    public function test_can_update_doctor()
    {
        $this->withoutMiddleware();
        // Create initial doctor
        $doctor = Doctor::create([
            'name' => 'Dr. Old Name',
            'slug' => 'dr-old-name',
            'designation' => 'Old Designation',
            'biography' => 'Old biography',
            'photo' => 'old_photo.jpg'
        ]);

        // Prepare updated data
        $updatedData = [
            'name' => 'Dr. New Name',
            'slug' => 'dr-new-name',
            'designation' => 'New Designation',
            'biography' => 'Updated biography',
            'email' => 'new@example.com'
        ];

        // Send update request
        $response = $this->post(route('admin_doctor_update', $doctor->id), $updatedData);

        // Verify redirect
        $response->assertStatus(302);
        $response->assertSessionHas('success');

        // Verify database update
        $this->assertDatabaseHas('doctors', [
            'id' => $doctor->id,
            'name' => 'Dr. New Name',
            'designation' => 'New Designation'
        ]);
    }

    /**
     * Test: Update doctor with new photo
     * Tests: Request → Route → Controller → Database + File Update
     */
    public function test_can_update_doctor_with_new_photo()
    {
        $this->withoutMiddleware();
        Storage::fake('public');

        // Create initial doctor with photo
        $doctor = Doctor::create([
            'name' => 'Dr. Test',
            'slug' => 'dr-test',
            'designation' => 'Specialist',
            'biography' => 'Test biography',
            'photo' => 'old_photo.jpg'
        ]);

        // Prepare update with new photo
        $newPhoto = UploadedFile::fake()->image('new_doctor.jpg');

        $updateData = [
            'name' => 'Dr. Test',
            'slug' => 'dr-test-updated',
            'designation' => 'Specialist',
            'biography' => 'Updated biography',
            'photo' => $newPhoto
        ];

        // Send update request
        $response = $this->post(route('admin_doctor_update', $doctor->id), $updateData);

        // Verify the response
        $response->assertStatus(302);

        // Verify new photo in database
        $updatedDoctor = Doctor::find($doctor->id);
        $this->assertNotEquals('old_photo.jpg', $updatedDoctor->photo);
        $this->assertStringStartsWith('doctor_', $updatedDoctor->photo);
    }

    /**
     * Test: Delete a doctor
     * Tests: Request → Route → Controller → Database Deletion
     */
    public function test_can_delete_doctor()
    {
        $this->withoutMiddleware();
        // Create a doctor
        $doctor = Doctor::create([
            'name' => 'Dr. To Delete',
            'slug' => 'dr-to-delete',
            'designation' => 'Surgeon',
            'biography' => 'Will be deleted',
            'photo' => 'delete_me.jpg'
        ]);

        // Verify exists
        $this->assertDatabaseHas('doctors', ['id' => $doctor->id]);

        // Send delete request
        $response = $this->get(route('admin_doctor_destroy', $doctor->id));

        // Verify redirect
        $response->assertStatus(302);
        $response->assertSessionHas('success');

        // Verify deleted from database
        $this->assertDatabaseMissing('doctors', ['id' => $doctor->id]);
    }

    /**
     * Test: Doctor validation - unique slug
     * Tests: Request validation before database operation
     */
    public function test_doctor_slug_must_be_unique()
    {
        $this->withoutMiddleware();
        // Create first doctor
        Doctor::create([
            'name' => 'Dr. First',
            'slug' => 'dr-first',
            'designation' => 'Specialist',
            'biography' => 'First doctor'
        ]);

        Storage::fake('public');
        $photo = UploadedFile::fake()->image('doctor.jpg');

        // Try to create another with same slug
        $response = $this->post(route('admin_doctor_store'), [
            'name' => 'Dr. Second',
            'slug' => 'dr-first', // Same slug
            'designation' => 'Specialist',
            'biography' => 'Second doctor',
            'photo' => $photo
        ]);

        // Should fail validation
        $response->assertStatus(302);
    }

    /**
     * Test: Doctor validation - slug format
     * Tests: Regex validation on slug field
     */
    public function test_doctor_slug_format_validation()
    {
        $this->withoutMiddleware();
        Storage::fake('public');
        $photo = UploadedFile::fake()->image('doctor.jpg');

        // Try invalid slug with spaces and capitals
        $response = $this->post(route('admin_doctor_store'), [
            'name' => 'Dr. Test',
            'slug' => 'Dr Test Invalid', // Invalid format
            'designation' => 'Specialist',
            'biography' => 'Test',
            'photo' => $photo
        ]);

        // Should fail validation
        $response->assertStatus(302);
    }

    /**
     * Test: Doctor timestamps are set
     * Tests: Database automatic timestamp columns
     */
    public function test_doctor_timestamps()
    {
        $this->withoutMiddleware();
        $doctor = Doctor::create([
            'name' => 'Dr. Timestamp Test',
            'slug' => 'dr-timestamp-test',
            'designation' => 'Test',
            'biography' => 'Testing timestamps'
        ]);

        $this->assertNotNull($doctor->created_at);
        $this->assertNotNull($doctor->updated_at);
    }

    /**
     * Test: Get edit form
     * Tests: Request → Route → Controller → View with model data
     */
    public function test_can_view_edit_doctor_form()
    {
        $this->withoutMiddleware();
        $doctor = Doctor::create([
            'name' => 'Dr. Edit',
            'slug' => 'dr-edit',
            'designation' => 'Specialist',
            'biography' => 'Edit test',
            'photo' => 'edit.jpg'
        ]);

        $response = $this->get(route('admin_doctor_edit', $doctor->id));

        $response->assertStatus(200);
        $response->assertViewIs('admin.doctor.edit');
        $response->assertViewHas('doctor');

        $viewDoctor = $response->viewData('doctor');
        $this->assertEquals($doctor->id, $viewDoctor->id);
        $this->assertEquals('Dr. Edit', $viewDoctor->name);
    }
}

