<div>
    <x-app-layout>
        <div class="flex ml-3">
            <x-navbar class="fixed top-0 left-0 w-1/5 h-screen"/>
            <div class="w-4/5 mt-5 ml-auto">
                {{-- <x-board /> --}}
                <livewire:board wire:emits="moveTask"/>
            </div>
        </div>
    </x-app-layout>
</div>
