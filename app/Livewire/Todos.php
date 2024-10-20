<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]

class Todos extends Component
{
    public $todos = [];
    public $result = [];
    public $todo;
    public $description;
    public $due_date;
    public $status;
    public $isUpdating = false;
    public $cachedId;

    public function mount(): void
    {
        $this->todos = [
            [
                'id' => 1,
                'todo' => 'Learn Laravel 8',
                'description' => 'Learn all about the new features in Laravel 8',
                'due_date' => now()->format('Y-m-d\TH:i'),
                'status' => 'pending',
            ],
            [
                'id' => 2,
                'todo' => 'Learn Livewire',
                'description' => 'Learn all about the new features in Livewire',
                'due_date' => now()->format('Y-m-d\TH:i'),
                'status' => 'pending',
            ],
            [
                'id' => 3,
                'todo' => 'Learn AlpineJS',
                'description' => 'Learn all about the new features in AlpineJS',
                'due_date' => now()->format('Y-m-d\TH:i'),
                'status' => 'pending',
            ],
        ];
        Log::info('Mount!');
    }

    public function render()
    {
        Log::info('Render!');
        return view('livewire.todos');
    }

    public function updated($property, $value)
    {
        Log::info('Updated property: ' . $property . ' = ' . $value);
    }

    public function updatedTodo($value)
    {
        Log::info('Updated Todo: ' . $value);
    }

    public function createTodo(): void
    {
        $this->todos[] = [
            'id' => count($this->todos) + 1,
            'todo' => $this->todo,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'status' => $this->status,
        ];

        $this->resetForm();
    }

    public function retriveTodo(int $id): void
    {
        $this->isUpdating = true;

        $this->result = array_filter($this->todos, function ($todo) use ($id) {
            return $todo['id'] === $id;
        });

        foreach ($this->result as $todo) {
            $this->todo = $todo['todo'];
            $this->description = $todo['description'];
            $this->due_date = $todo['due_date'];
            $this->status = $todo['status'];
        }

        $this->cachedId = $id;
    }

    public function updateTodo(): void
    {
        $this->deleteTodo($this->cachedId);

        $this->todos[] = [
            'id' => $this->cachedId,
            'todo' => $this->todo,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'status' => $this->status,
        ];

        $this->resetForm();

        $this->isUpdating = false;
    }

    public function resetForm(): void
    {
        $this->isUpdating = false;

        $this->reset('todo', 'description', 'due_date', 'status');
    }

    public function deleteTodo(int $id): void
    {
        $this->result = array_filter($this->todos, function ($todo) use ($id) {
            return $todo['id'] !== $id;
        });

        $this->todos = $this->result;
    }
}
