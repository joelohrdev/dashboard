<div>
    <div class="md:flex md:items-center md:justify-between mb-10">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                {{ $server->name }}
            </h2>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4 items-center">
            <p class="mr-5">{{ $server->ip_address }}</p>
            <div x-data="{ open : false }" class="relative">
                <button x-on:click="open = ! open" x-on:click type="button" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" id="pinned-project-options-menu-0-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open options</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false" x-transition class="z-10 mx-3 origin-top-right absolute right-0 top-5 w-48 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-0-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="pinned-project-options-menu-0-item-1">Edit</a>
                        <form wire:click.prevent="deleteServer">
                            <button type="submit" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="pinned-project-options-menu-0-item-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
