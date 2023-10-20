<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Board extends Component
{
    #[Rule('required')]
    public $title = '';

    #[Rule('required')]
    public $description = '';

    public $tasksCount = [];
    public $formTask = false;
    public $post;
    public $paginate = 10;

    public function mount()
    {
        $this->tasksCount = Task::with('user')->get();
    }

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
        $this->paginate = $this->paginate + 1;
    }

    public function moreTask()
    {
        $this->paginate = $this->paginate + 10;
    }

    public function render()
    {
        $this->tasksCount = $this->tasksCount;
        $tasks = Task::with('user')->orderByDesc('created_at')->paginate($this->paginate);
        return view('livewire.board', compact('tasks'));
    }
}
