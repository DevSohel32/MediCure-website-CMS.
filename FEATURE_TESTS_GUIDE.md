# Feature Tests Documentation

## Overview
Comprehensive Feature Tests for MediCure Laravel Application that test the complete flow:
**Request → Route → Controller → Database**

Each test verifies that:
1. HTTP request is properly routed
2. Controller processes the request
3. Data is correctly saved/updated/deleted in the database
4. Proper responses and redirects are returned
5. Database relationships work correctly

---

## Test Files Created

### 1. **AdminPostTest.php** - Blog Post Management
Tests the complete post creation, reading, updating, and deletion workflow.

#### Test Methods:
- ✅ `test_can_create_post()` - Create a new post with category
- ✅ `test_can_view_posts_list()` - Fetch all posts from database
- ✅ `test_can_update_post()` - Update existing post data
- ✅ `test_can_delete_post()` - Delete a post from database
- ✅ `test_post_validation_fails_without_required_fields()` - Input validation
- ✅ `test_post_has_category_relationship()` - Test foreign key relationships
- ✅ `test_post_timestamps_are_set()` - Test created_at & updated_at

#### Example Flow:
```
POST /admin/post/store 
  → AdminPostController::store() 
    → Post::create() 
      → Database INSERT 
        → Redirect to admin_post_index with success message
```

---

### 2. **AdminDoctorTest.php** - Doctor Profile Management
Tests doctor CRUD operations including photo uploads.

#### Test Methods:
- ✅ `test_can_create_doctor()` - Create doctor with photo upload
- ✅ `test_can_view_doctors_list()` - Fetch all doctors
- ✅ `test_can_update_doctor()` - Update doctor information
- ✅ `test_can_update_doctor_with_new_photo()` - Update with new photo
- ✅ `test_can_delete_doctor()` - Delete doctor record
- ✅ `test_doctor_slug_must_be_unique()` - Unique slug validation
- ✅ `test_doctor_slug_format_validation()` - Slug format regex validation
- ✅ `test_doctor_timestamps()` - Auto-timestamp testing
- ✅ `test_can_view_edit_doctor_form()` - Load edit form with model data

#### Example Flow (Create Doctor):
```
POST /admin/doctor/store 
  + File Upload (photo)
  → AdminDoctorController::store()
    → File saved to public/uploads/
    → Doctor::create() 
      → Database INSERT with file reference
        → Redirect with success message
```

---

### 3. **AdminFaqTest.php** - FAQ Management
Tests Frequently Asked Questions CRUD operations.

#### Test Methods:
- ✅ `test_can_create_faq()` - Create new FAQ
- ✅ `test_can_view_faqs_list()` - View all FAQs
- ✅ `test_can_update_faq()` - Update FAQ content
- ✅ `test_can_delete_faq()` - Delete FAQ
- ✅ `test_can_view_edit_faq_form()` - Load edit form
- ✅ `test_faq_has_timestamps()` - Test timestamps

---

### 4. **AdminServiceTest.php** - Medical Services
Tests medical services management with optional image uploads.

#### Test Methods:
- ✅ `test_can_create_service()` - Create service with icon
- ✅ `test_can_view_services_list()` - Fetch all services
- ✅ `test_can_update_service()` - Update service data
- ✅ `test_can_delete_service()` - Delete service

#### Example Flow:
```
POST /admin/service/store 
  → AdminServiceController::store()
    → Service::create() 
      → Database INSERT
        → Redirect to admin_service_index
```

---

### 5. **AdminDepartmentTest.php** - Hospital Departments
Tests department management (Cardiology, Surgery, etc.).

#### Test Methods:
- ✅ `test_can_create_department()` - Create department with icon
- ✅ `test_can_view_departments_list()` - Fetch all departments
- ✅ `test_can_update_department()` - Update department
- ✅ `test_can_delete_department()` - Delete department

---

### 6. **AdminPhotoTest.php** - Photo Gallery
Tests photo gallery management.

#### Test Methods:
- ✅ `test_can_create_photo()` - Create photo with file upload
- ✅ `test_can_view_photos_list()` - View all photos
- ✅ `test_can_update_photo()` - Update photo metadata
- ✅ `test_can_delete_photo()` - Delete photo

---

### 7. **AdminVideoTest.php** - Video Gallery
Tests video gallery management.

#### Test Methods:
- ✅ `test_can_create_video()` - Create video entry
- ✅ `test_can_view_videos_list()` - View all videos
- ✅ `test_can_update_video()` - Update video link
- ✅ `test_can_delete_video()` - Delete video

---

## How to Run Tests

### Run All Feature Tests:
```bash
php artisan test --filter=Feature
```

### Run Specific Test Class:
```bash
php artisan test tests/Feature/AdminPostTest.php
```

### Run Specific Test Method:
```bash
php artisan test tests/Feature/AdminPostTest.php --filter=test_can_create_post
```

### Run with Coverage:
```bash
php artisan test tests/Feature --coverage
```

### Run and Show Output:
```bash
php artisan test tests/Feature -v
```

---

## What These Tests Cover

### 1. **Request Validation** ✓
- Tests that invalid data is rejected
- Verifies validation rules are enforced
- Example: Doctor slug must be unique and lowercase

### 2. **Route to Controller Flow** ✓
- Verifies correct HTTP method (GET/POST)
- Tests route parameters are passed correctly
- Checks controller method is invoked

### 3. **Database Operations** ✓
- **CREATE**: `assertDatabaseHas()` - Verify INSERT
- **READ**: `viewData()` - Verify SELECT and data retrieval
- **UPDATE**: `assertDatabaseHas()` - Verify UPDATE
- **DELETE**: `assertDatabaseMissing()` - Verify DELETE

### 4. **File Uploads** ✓
- Tests photo/image uploads for Doctor, Photo, Service, Department
- Uses `Storage::fake('public')` to avoid actual file system
- Verifies file references are saved in database

### 5. **Relationships** ✓
- Tests foreign key constraints
- Verifies `belongsTo()` and `hasMany()` relationships
- Example: Post → PostCategory relationship

### 6. **Timestamps** ✓
- Verifies `created_at` and `updated_at` are automatically set
- Tests that timestamps update on model changes

### 7. **HTTP Response Codes** ✓
- Status 200 for successful GET requests
- Status 302 for redirects (successful POST/DELETE)
- Session flash messages ('success', 'error', 'info')

---

## Key Testing Patterns Used

### 1. RefreshDatabase Trait
```php
use RefreshDatabase;
```
- Runs migrations before each test
- Rolls back database after each test
- Ensures test isolation

### 2. Fake File Storage
```php
Storage::fake('public');
$photo = UploadedFile::fake()->image('photo.jpg');
```
- Prevents actual file system writes
- Simulates file uploads safely in tests

### 3. Database Assertions
```php
// Assert data exists
$this->assertDatabaseHas('posts', ['title' => 'Test']);

// Assert data doesn't exist
$this->assertDatabaseMissing('posts', ['id' => 999]);
```

### 4. View Data Retrieval
```php
$posts = $response->viewData('posts');
$this->assertCount(2, $posts);
```

### 5. Session Flash Messages
```php
$response->assertSessionHas('success');
$response->assertSessionHas('error', 'Custom message');
```

---

## Sample Test Execution Flow

### Creating a Post (Detailed):
```php
// 1. Create Category (prerequisite)
$category = PostCategory::create([...]);

// 2. Prepare POST data
$postData = [
    'title' => 'Test Post',
    'post_category_id' => $category->id,
    ...
];

// 3. Send HTTP POST request
$response = $this->post(route('admin_post_store'), $postData);

// 4. Assert HTTP Response
$response->assertStatus(302);  // Redirect
$response->assertRedirect(route('admin_post_index'));

// 5. Assert Database Changes
$this->assertDatabaseHas('posts', [
    'title' => 'Test Post'
]);

// 6. Verify Model
$post = Post::where('title', 'Test Post')->first();
$this->assertNotNull($post);
```

---

## Important Notes

### ⚠️ Environment Configuration
Ensure your `.env.testing` has:
```env
DB_CONNECTION=sqlite
DB_DATABASE=:memory:
```

### ⚠️ RefreshDatabase
The `RefreshDatabase` trait:
- Runs all migrations before each test
- Truncates tables after each test
- Provides clean database state

### ⚠️ Storage Mocking
Always use `Storage::fake('public')` for file upload tests to avoid writing to actual file system.

### ⚠️ Authentication
If routes require authentication, add:
```php
$this->actingAs($admin);
// or
$this->withoutMiddleware();
```

---

## Extending the Tests

To add more feature tests for other entities (Slider, Counter, Package, etc.):

```php
<?php

namespace Tests\Feature;

use App\Models\YourModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminYourModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_item()
    {
        $data = [...]; // Your test data
        
        $response = $this->post(route('admin_yourmodel_store'), $data);
        
        $response->assertStatus(302);
        $this->assertDatabaseHas('yourmodel_table', ['field' => 'value']);
    }
}
```

---

## Benefits of Feature Tests

✅ **Complete Flow Verification** - Tests entire request-to-database cycle  
✅ **Database Integrity** - Ensures data is actually saved correctly  
✅ **Route Validation** - Verifies routes are correctly configured  
✅ **Relationship Testing** - Confirms foreign keys and relationships work  
✅ **File Upload Safety** - Tests file uploads without touching file system  
✅ **Regression Prevention** - Catches bugs when code changes  
✅ **Documentation** - Tests serve as living documentation  

---

## Status Codes Reference

| Code | Meaning | When Used |
|------|---------|-----------|
| 200 | OK | GET requests, successful retrieval |
| 302 | Found (Redirect) | POST/DELETE with redirect |
| 404 | Not Found | Invalid resource ID |
| 422 | Unprocessable Entity | Validation failed |

---

*Last Updated: 2024*
