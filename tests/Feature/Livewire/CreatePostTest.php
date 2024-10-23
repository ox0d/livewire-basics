<?php

namespace Tests\Feature\Livewire;

use App\Models\Post;
use App\Livewire\CreatePost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /** @test */
    // Smoke test: Verify that the component renders successfully.
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    /** @test */
    // Happy path test: This test verifies the successful creation of a post.
    public function test_create_post()
    {
        $post = Post::whereTitle('My title')->first();
        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', 'My title')
            ->set('content', 'My content')
            ->call('createPost');

        $post = Post::whereTitle('My title')->first();
        $this->assertNotNull($post);
    }

    // Edge case test: Verify that the title field is mandatory.
    /** @test */
    public function test_title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->call('createPost')
            ->assertHasErrors(['title' => 'required']);
    }

    /** @test */
    public function test_content_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('content', '')
            ->call('createPost')
            ->assertHasErrors(['content' => 'required']);
    }
}
