<div x-data="{ open: false }" {{ $attributes->merge(['class' => 'bg-white pt-6 px-6 w-1/5 h-screen font-bold']) }}>
    <div class="flex items-center justify-between">
        <div class="flex gap-3">
            <div class="bg-gray-800 w-6 h-6 rounded-lg"></div>
            <h3>Company</h3>
        </div>
        <svg class="cursor-pointer" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.881802 1.2817C1.05754 1.10597 1.34246 1.10597 1.5182 1.2817L5.46967 5.23318C5.76256 5.52607 6.23744 5.52607 6.53033 5.23318L10.4818 1.2817C10.6575 1.10597 10.9425 1.10597 11.1182 1.2817C11.2939 1.45744 11.2939 1.74236 11.1182 1.9181L6.3182 6.7181C6.14246 6.89384 5.85754 6.89384 5.6818 6.7181L0.881802 1.9181C0.706066 1.74236 0.706066 1.45744 0.881802 1.2817Z" fill="#98A2B3" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>

    {{-- feature --}}
    <div class="mt-8 flex flex-col gap-[300px]">
        <div>
            <div class="flex flex-col gap-2">
                <x-nav-link href="{{ route('task.index')}}" wire:navigate :active="request()->routeIs('task.index')">
                    @if (request()->routeIs('task.index'))
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3C1 1.89543 1.89543 1 3 1H5C6.10457 1 7 1.89543 7 3V5C7 6.10457 6.10457 7 5 7H3C1.89543 7 1 6.10457 1 5V3Z" stroke="#1D2939" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11 3C11 1.89543 11.8954 1 13 1H15C16.1046 1 17 1.89543 17 3V5C17 6.10457 16.1046 7 15 7H13C11.8954 7 11 6.10457 11 5V3Z" stroke="#1D2939" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 13C1 11.8954 1.89543 11 3 11H5C6.10457 11 7 11.8954 7 13V15C7 16.1046 6.10457 17 5 17H3C1.89543 17 1 16.1046 1 15V13Z" stroke="#1D2939" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11 13C11 11.8954 11.8954 11 13 11H15C16.1046 11 17 11.8954 17 13V15C17 16.1046 16.1046 17 15 17H13C11.8954 17 11 16.1046 11 15V13Z" stroke="#1D2939" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Task
                    @else
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3C1 1.89543 1.89543 1 3 1H5C6.10457 1 7 1.89543 7 3V5C7 6.10457 6.10457 7 5 7H3C1.89543 7 1 6.10457 1 5V3Z" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11 3C11 1.89543 11.8954 1 13 1H15C16.1046 1 17 1.89543 17 3V5C17 6.10457 16.1046 7 15 7H13C11.8954 7 11 6.10457 11 5V3Z" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 13C1 11.8954 1.89543 11 3 11H5C6.10457 11 7 11.8954 7 13V15C7 16.1046 6.10457 17 5 17H3C1.89543 17 1 16.1046 1 15V13Z" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11 13C11 11.8954 11.8954 11 13 11H15C16.1046 11 17 11.8954 17 13V15C17 16.1046 16.1046 17 15 17H13C11.8954 17 11 16.1046 11 15V13Z" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="text-[#667085]">Task</span>
                    @endif
                </x-nav-link>
                <div class="flex items-center gap-3 cursor-pointer hover:bg-gray-100 py-3 px-2 rounded-lg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h4 class="text-[#667085]">Notifications</h4>
                </div>
                <div class="flex items-center gap-3 cursor-pointer hover:bg-gray-100 py-3 px-2 rounded-lg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8V16M12 11V16M8 14V16M6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20Z" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h4 class="text-[#667085]">Analytics</h4>
                </div>
                <div class="flex items-center gap-3 cursor-pointer hover:bg-gray-100 py-3 px-2 rounded-lg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h4 class="text-[#667085]">Team</h4>
                </div>
            </div>
            <div>
                <div @click="open=!open" class="flex items-center gap-3 cursor-pointer hover:bg-gray-100 py-3 px-2 rounded-lg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h4 class="text-[#667085]">Settings</h4>
                </div>
                <div x-cloak x-show="open" class="absolute top-[340px] ml-[40px] flex items-center gap-3 cursor-pointer py-3 px-2 rounded-lg">
                    <div class="flex gap-2">
                        {{-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 12L5 10M5 10L12 3L19 10M5 10V20C5 20.5523 5.44772 21 6 21H9M19 10L21 12M19 10V20C19 20.5523 18.5523 21 18 21H15M9 21C9.55228 21 10 20.5523 10 20V16C10 15.4477 10.4477 15 11 15H13C13.5523 15 14 15.4477 14 16V20C14 20.5523 14.4477 21 15 21M9 21H15" stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> --}}
                        <svg width="22" height="22" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.46472 19.1686H24.4789V19.1686V16.8363V16.8362H4.46472L9.93505 11.3659V11.3658L8.28578 9.71667L0 18.0024L7.28462e-05 18.0025H0L8.28578 26.2882L9.93505 24.639V24.639L4.46472 19.1686Z" fill="black"/>
                            <path d="M10.5029 0.507324V2.83968H32.6603V33.1603H10.5029V35.4927H34.9927V0.507324H10.5029Z" fill="black"/>
                        </svg>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <button @click.prevent="$root.submit();">Logout</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>