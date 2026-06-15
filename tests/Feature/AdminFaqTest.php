<?php

namespace Tests\Feature;

use App\Models\Faq;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminFaqTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test: Create a new FAQ
     * Tests: Request → Route → Controller → Database
     */
    public function test_can_create_faq()
    {
        $this->withoutMiddleware();
        $this->withoutMiddleware();

        // Prepare FAQ data
        $faqData = [
            'question' => 'What is medicure?',
            'answer' => 'MediCure is a medical services platform',
            'table_name' => 'faqs'
        ];

        // Send POST request
        $response = $this->post(route('admin_faq_store'), $faqData);

        // Verify redirect
        $response->assertStatus(302);
        $response->assertRedirect(route('admin_faq_index'));

        // Verify database
        $this->assertDatabaseHas('faqs', [
            'question' => 'What is medicure?',
            'answer' => 'MediCure is a medical services platform'
        ]);

        // Verify the FAQ exists
        $faq = Faq::where('question', 'What is medicure?')->first();
        $this->assertNotNull($faq);
    }

    /**
     * Test: View all FAQs
     * Tests: Request → Route → Controller → Database → View
     */
    public function test_can_view_faqs_list()
    {
        $this->withoutMiddleware();
        // Create test FAQs
        Faq::create([
            'question' => 'How to book appointment?',
            'answer' => 'Use our online booking system'
        ]);

        Faq::create([
            'question' => 'What are operating hours?',
            'answer' => '9 AM to 5 PM'
        ]);

        // Make request
        $response = $this->get(route('admin_faq_index'));

        // Verify
        $response->assertStatus(200);
        $response->assertViewHas('faqs');
        $faqs = $response->viewData('faqs');
        $this->assertCount(2, $faqs);
    }

    /**
     * Test: Update an FAQ
     * Tests: Request → Route → Controller → Database Update
     */
    public function test_can_update_faq()
    {
        $this->withoutMiddleware();
        // Create FAQ
        $faq = Faq::create([
            'question' => 'Original question?',
            'answer' => 'Original answer'
        ]);

        // Update data
        $updateData = [
            'question' => 'Updated question?',
            'answer' => 'Updated answer',
            'table_name' => 'faqs'
        ];

        // Send update request
        $response = $this->post(route('admin_faq_update', $faq->id), $updateData);

        // Verify
        $response->assertStatus(302);
        $response->assertSessionHas('success');

        // Verify database
        $this->assertDatabaseHas('faqs', [
            'id' => $faq->id,
            'question' => 'Updated question?'
        ]);
    }

    /**
     * Test: Delete an FAQ
     * Tests: Request → Route → Controller → Database Deletion
     */
    public function test_can_delete_faq()
    {
        $this->withoutMiddleware();
        // Create FAQ
        $faq = Faq::create([
            'question' => 'Delete me?',
            'answer' => 'This will be deleted'
        ]);

        // Verify exists
        $this->assertDatabaseHas('faqs', ['id' => $faq->id]);

        // Send delete request
        $response = $this->get(route('admin_faq_destroy', $faq->id));

        // Verify deleted
        $response->assertStatus(302);
        $this->assertDatabaseMissing('faqs', ['id' => $faq->id]);
    }

    /**
     * Test: Get edit form with FAQ data
     * Tests: Request → Route → Controller → View with model
     */
    public function test_can_view_edit_faq_form()
    {
        $this->withoutMiddleware();
        $faq = Faq::create([
            'question' => 'Edit this?',
            'answer' => 'Edit this answer'
        ]);

        $response = $this->get(route('admin_faq_edit', $faq->id));

        $response->assertStatus(200);
        $response->assertViewHas('faq');
        $viewFaq = $response->viewData('faq');
        $this->assertEquals($faq->id, $viewFaq->id);
    }

    /**
     * Test: FAQ timestamps
     * Tests: Database automatic timestamps
     */
    public function test_faq_has_timestamps()
    {
        $this->withoutMiddleware();
        $faq = Faq::create([
            'question' => 'Timestamp test?',
            'answer' => 'Testing'
        ]);

        $this->assertNotNull($faq->created_at);
        $this->assertNotNull($faq->updated_at);
    }
}

