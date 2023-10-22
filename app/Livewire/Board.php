<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Pagination\Paginator;
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

    // public $tasks = [];
    public $formTask = false;
    public $post;
    public $paginate = 10;

    // tasks
    public $todoTasks = [];

    public function mount()
    {
        // $this->tasks = Task::with('user')->get();
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

    #[On('moveTask')]
    public function moveTask($data)
    {
        $task = Task::where('id', $data['idTask'])->first();
        if ($data['positionTask'] === 'doing') {
            $task->status = 'doing';
            return $task->save();
        };
    }

    public function render()
    {
        // $this->tasksCount = $this->tasksCount;
        $tasks = Task::with('user')->get();

        $todoTasks = $tasks->filter(function ($task) {
            return $task->status === 'todo';
        });

        $doingTasks = $tasks->filter(function ($task) {
            return $task->status === 'doing';
        });

        // $todoCollection = collect($this->todoTasks);
        // $this->todoTasks = $todoCollection->paginate($this->paginate);
        // $tasks = Task::with('user')->orderByDesc('created_at')->paginate($this->paginate);



        $perPage = $this->paginate;
        $currentPage = Paginator::resolveCurrentPage('page');

        // Todo
        $collectionTodo = collect($todoTasks);
        $sortedTodoTasks = $collectionTodo->sortByDesc('created_at');
        $currentPageItemsTodo = $sortedTodoTasks->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $todoTasksAll = new Paginator($currentPageItemsTodo, $perPage, $currentPage, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);

        // Doing
        $collectionDoing = collect($doingTasks);
        $sortedDoingTasks = $collectionDoing->sortByDesc('updated_at');
        $currentPageItemsDoing = $sortedDoingTasks->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $doingTasksAll = new Paginator($currentPageItemsDoing, $perPage, $currentPage, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);


        return view('livewire.board', compact('todoTasksAll', 'doingTasksAll'));
    }
}
