<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required', as: 'TITLE')]
    #[Rule('string', message: 'Title must be string!')]
    #[Rule('min:3', message: 'Title must be more than 3!')]
    #[Rule('max:255', message: 'Title must be less than 255!')]
    public $title;


    #[Rule('required', as: 'CONTENT')]
    #[Rule('string', message: 'Content must be string!')]
    #[Rule('min:10', message: 'Content must be more than 10!')]
    public $content;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function createPost()
    {
        // Tow way you could do validation in livewire
        //1) using validate method
        // $this->validate([
        //     'title' => ['required', 'string', 'max:255'],
        //     'content' => ['required', 'string'],
        // ]);

        // 2) using #[Rule] attribute
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->reset('title', 'content');

        $this->redirect(route('show-posts'), navigate: true);
    }
}
