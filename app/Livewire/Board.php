<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Board extends Component
{
    #[Rule('required')]
    public $title = '';

    #[Rule('required')]
    public $description = '';

    public $formTask = false;
    public $post;

    public function store()
    {
        $this->validate();

        $user = Auth::user();

        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => $user->id,
            'date' => now()->format('Y-m-d'),
        ];

        $post = Task::create($data);

        $this->formTask = false;
        $this->resetFormTask();

        return $this->dispatch('taskcreated', $post);
    }

    public function resetFormTask()
    {
        $this->title = '';
        $this->description = '';
    }

    #[On('taskcreated')]
    public function taskAdded($post)
    {
        $this->post = $post;
    }

    public function render()
    {
        $tasks = Task::paginate(10);
        return view('livewire.board', compact('tasks'));
    }
}
