<div>
    <div class="grid grid-cols-3 gap-4">
        <div class="mb-2 text-[#667085] font-bold">TO DO</div>
        <div class="text-[#667085] font-bold">DOING</div>
        <div class="text-[#667085] font-bold">DONE</div>

        {{-- TODO --}}
        <div x-data="{ newTask: false }" class="swim-lane bg-[#c6c1c1] bg-opacity-30 rounded-lg px-5 py-5 min-h-screen">
            <div class="inline-block">
                <div wire:click="$toggle('formTask')" class="flex mb-4 cursor-pointer">
                    <span class="border border-black px-2 rounded-l bg-black text-white">+</span>
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
            {{-- <div class="task bg-white rounded-lg px-5 py-5 cursor-pointer mb-4" draggable="true">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold border-2 border-[#c6c1c1] inline-block px-1">#1</h1>
                    <h2 class="text-lg font-bold">Make a Kanban App</h2>
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
            </div>
            <div class="task bg-white rounded-lg px-5 py-5 cursor-pointer mb-4" draggable="true">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold border-2 border-[#c6c1c1] inline-block px-1">#2</h1>
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
            @foreach ($tasks as $task)
                <div class="task bg-white rounded-lg px-5 py-5 cursor-pointer mb-4" draggable="true">
                    <div class="flex items-center gap-2">
                        <h1 class="text-xl font-bold border-2 border-[#c6c1c1] inline-block px-1">#{{ $task->id }}</h1>
                        <h2 class="text-lg font-bold">{{ $task->title }}</h2>
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
                </div>
            @endforeach
            {{-- {{ $tasks->links() }} --}}
        </div>

        {{-- DOING --}}
        <div class="swim-lane bg-blue-400 bg-opacity-30 rounded-lg px-5 py-5">
            {{-- <div class="task bg-white rounded-lg px-5 py-5 cursor-pointer mb-4" draggable="true">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold border-2 border-[#c6c1c1] inline-block px-1">#3</h1>
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

            {{-- <div class="task bg-white rounded-lg px-5 py-5 cursor-pointer mb-4" draggable="true">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold border-2 border-[#c6c1c1] inline-block px-1">#5</h1>
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
            </div>

            <div class="task bg-white rounded-lg px-5 py-5 cursor-pointer mb-4" draggable="true">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold border-2 border-[#c6c1c1] inline-block px-1">#6</h1>
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
            </div>

            <div class="task bg-white rounded-lg px-5 py-5 cursor-pointer mb-4" draggable="true">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold border-2 border-[#c6c1c1] inline-block px-1">#7</h1>
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

        {{-- DONE --}}
        <div class="swim-lane bg-[#4ef551] bg-opacity-30 rounded-lg px-5 py-5">
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
<script>
    const draggables = document.querySelectorAll(".task");
    const droppables = document.querySelectorAll(".swim-lane");

    draggables.forEach((task) => {
        task.addEventListener("dragstart", () => {
            task.classList.add("is-dragging");
        });
        task.addEventListener("dragend", () => {
            task.classList.remove("is-dragging");
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