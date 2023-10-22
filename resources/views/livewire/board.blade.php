<div>
    <div class="grid grid-cols-3 gap-4">
        <div class="text-[#667085] font-bold sticky top-0"><span class="px-2 py-1 border border-slate-800 bg-slate-700 text-white">TO DO</span></div>
        <div class="text-[#667085] font-bold sticky top-0"><span class="px-2 py-1 border border-slate-800 bg-slate-700 text-white">DOING</span></div>
        <div class="text-[#667085] font-bold sticky top-0"><div class=" flex items-center gap-2 w-[90px] px-2 border border-slate-800 bg-slate-700 text-white"><div class="bg-green-400 w-3 h-3"></div>DONE</div></div>

        {{-- TODO --}}
        <div id="todo" x-data="{ newTask: false }" class="swim-lane bg-[#c6c1c1] bg-opacity-30 min-h-screen px-5 py-5">
            <div class="inline-block">
                <div wire:click="$toggle('formTask')" class="flex mb-4 cursor-pointer">
                    <span class="border border-black px-2 rounded-l bg-black text-white">{{ $formTask ? '-' : '+' }}</span>
                    <h4 class="border-y border-r border-black px-2 rounded-r shadow-xl hover:bg-white">New Task</h4>
                </div>
            </div>
            @if ($formTask)
                <div class="task bg-white border border-black rounded-lg px-5 py-5 mb-4 transition-opacity duration-300 ease-in-out">
                    <form wire:submit="store">
                        @csrf
                        <h2 class="text-lg font-bold mb-2">New</h2>
                        <div class="flex flex-col gap-4">
                            <div>
                                <p class="text-sm">Title<span class="text-[red]">*</span></p>
                                <input wire:model="title" class="rounded-lg w-full" type="text" placeholder="Fixed you Task">
                                @error('title')
                                    <p class="text-[red] text-xs">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <p class="text-sm">Description<span class="text-[red]">*</span></p>
                                <textarea wire:model="description" class="w-full" placeholder="your task" rows="2"></textarea>
                                @error('description')
                                    <p class="text-[red] text-xs">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="mt-4 bg-blue-600 hover:bg-blue-800 text-white px-2 rounded-lg">Submit</button>
                        </div>
                    </form>
                </div>
            @endif
            {{-- @php
                $todoTasks = $tasksCount->filter(function($task) {
                    return $task->status === 'todo';
                });
            @endphp --}}
            @foreach ($todoTasksAll as $task)
                @php
                    $tanggal = \Carbon\Carbon::parse($task->date)->format('d');
                    $bulan = substr(\Carbon\Carbon::parse($task->date)->format('F'), 0, 3);
                    $tahun = \Carbon\Carbon::parse($task->date)->format('Y');
                @endphp
                @if ($task->status === 'todo')
                    <div id="task" class="task bg-white rounded-lg px-5 py-5 cursor-pointer mb-4" draggable="true" data-task="{{ $task->id }}">
                        <div class="flex items-center gap-2">
                            <h1 class="text-xl font-bold border-2 border-[#c6c1c1] inline-block px-1">#{{ $task->id }}</h1>
                            <h2 class="text-lg font-bold">{{ Str::limit($task->title, 20) }}</h2>
                        </div>
                        <div class="my-2 flex items-center gap-2">
                            <span class="text-sm font-bold text-[#98A2B3]">{{ $tanggal . ' ' . $bulan . ' ' . $tahun}}</span>
                            <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
                            </svg>
                            <span class="text-sm font-bold text-[#98A2B3]">Created by <span class="text-[#667085]">{{ $task->user->name }}</span></span>
                        </div>
                        <p class="text-sm text-[#98A2B3] mb-3">
                            Please use trello and designs in Dribbble as reference. And carry on...
                        </p>
                    </div>
                @endif
            @endforeach

            {{-- @php
                $todoTasksCount = count($tasksCount->filter(function($task) {
                    return $task->status === 'todo';
                }));
            @endphp
            @if ($todoTasksCount > 10 && $paginate < count($tasksCount))
                <div wire:click="moreTask" class="mt-6">
                    <div class="flex justify-center cursor-pointer">
                        <span class="text-sm">More...</span>
                    </div>
                </div>
            @endif --}}
        </div>

        {{-- DOING --}}
        <div id="doing" class="swim-lane bg-[#c6c1c1] bg-opacity-30 px-5 py-5">
            {{-- @php
                $doingTasks = $tasksCount->filter(function($task) {
                    return $task->status === 'doing';
                });
            @endphp --}}
            @foreach ($doingTasksAll as $task)
                @php
                    $tanggal = \Carbon\Carbon::parse($task->date)->format('d');
                    $bulan = substr(\Carbon\Carbon::parse($task->date)->format('F'), 0, 3);
                    $tahun = \Carbon\Carbon::parse($task->date)->format('Y');
                @endphp
                @if ($task->status === 'doing')
                    <div id="task" class="task bg-white rounded-lg px-5 py-5 cursor-pointer mb-4" draggable="true" data-task="{{ $task->id }}">
                        <div class="flex items-center gap-2">
                            <h1 class="text-xl font-bold border-2 border-[#c6c1c1] inline-block px-1">#{{ $task->id }}</h1>
                            <h2 class="text-lg font-bold">{{ Str::limit($task->title, 20) }}</h2>
                        </div>
                        <div class="my-2 flex items-center gap-2">
                            <span class="text-sm font-bold text-[#98A2B3]">{{ $tanggal . ' ' . $bulan . ' ' . $tahun}}</span>
                            <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
                            </svg>
                            <span class="text-sm font-bold text-[#98A2B3]">Created by <span class="text-[#667085]">{{ $task->user->name }}</span></span>
                        </div>
                        <p class="text-sm text-[#98A2B3] mb-3">
                            Please use trello and designs in Dribbble as reference. And carry on...
                        </p>
                    </div>
                @endif
            @endforeach

            {{-- @if (count($tasksCount) > 10 && $paginate < count($tasksCount))
                <div wire:click="moreTask" class="mt-6">
                    <div class="flex justify-center cursor-pointer">
                        <span class="text-sm">More...</span>
                    </div>
                </div>
            @endif --}}
        </div>

        {{-- DONE --}}
        <div id="done" class="swim-lane bg-[#c6c1c1] bg-opacity-30 px-5 py-5">
            {{-- <div class="task bg-white rounded-lg px-5 py-5 cursor-pointer mb-4 " draggable="true">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold border-2 border-[#c6c1c1] inline-block px-1">#8</h1>
                    <h2 class="text-lg font-bold">Fix his kid through any</h2>
                </div>
                <div class="my-2 flex items-center gap-2">
                    <span class="text-sm font-bold text-[#98A2B3]">12th Jan</span>
                    <svg width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
                    </svg>
                    <span class="text-sm font-bold text-[#98A2B3]">Created by <span class="text-[#667085]">Prahlad</span></span>
                </div>
                <p class="text-sm text-[#98A2B3] mb-3">
                    Please use trello and designs in Dribbble as reference. And carry on...
                </p>
            </div> --}}
        </div>
    </div>
</div>
@push('scripts')
    <script>
        const draggables = document.querySelectorAll(".task");
        const droppables = document.querySelectorAll(".swim-lane");

        draggables.forEach((task) => {
            task.addEventListener("dragstart", () => {
                task.classList.add("is-dragging");
                task.setAttribute('data-prev-position', task.closest('.swim-lane').id);
            });
            task.addEventListener("dragend", () => {
                task.classList.remove("is-dragging");
                
                // // Ambil ID zona saat elemen tugas selesai di-drop
                const positionTask = task.closest('.swim-lane').id;

                let countTodo = 0;
                let countDoing = 0;
                let countDone = 0;
                droppables.forEach((board) => {
                    countDoing = document.querySelectorAll("#doing .task").length;
                    countTodo = document.querySelectorAll("#todo .task").length;
                    countDone = document.querySelectorAll("#done .task").length;
                })

                if(positionTask === 'doing') {
                    const idTask = task.getAttribute('data-task');
                    const prevPositionTask = task.getAttribute('data-prev-position');
                    
                    if (prevPositionTask === 'doing') {
                        console.log(prevPositionTask);
                        return;
                    }

                    setTimeout(() => {
                        @this.dispatch('moveTask', [{ idTask: idTask, positionTask: positionTask }]);
                        console.log(positionTask);
                    }, 3000);
                    return;
                }
                console.log("stop")

            });
        });

        droppables.forEach((zone) => {
            zone.addEventListener("dragover", (e) => {
                e.preventDefault();

                const bottomTask = insertAboveTask(zone, e.clientY);
                const curTask = document.querySelector(".is-dragging");
                
                if (!bottomTask) {
                    zone.appendChild(curTask);
                } else {
                    zone.insertBefore(curTask, bottomTask);
                }
            });
        });

        const insertAboveTask = (zone, mouseY) => {
            const els = zone.querySelectorAll(".task:not(.is-dragging)");
            let closestTask = null;
            let closestOffset = Number.NEGATIVE_INFINITY;

            els.forEach((task) => {
                const { top } = task.getBoundingClientRect();
                
                const offset = mouseY - top;

                if (offset < 0 && offset > closestOffset) {
                    closestOffset = offset;
                    closestTask = task;
                }
            });
            return closestTask;
        };
    </script> 
@endpush