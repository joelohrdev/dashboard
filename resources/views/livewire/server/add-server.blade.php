<div
    x-data="{ isOpen: false }"
    class="relative"
>
    <button
        @click="isOpen = !isOpen"
        type="button"
        class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:order-1 sm:ml-3"
    >
        Add Server
    </button>
    <div
        class="absolute right-0 z-10 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-lg ring-1 ring-black ring-opacity-5 rounded mt-2"
        x-cloak
        x-show.transition.origin.top.right="isOpen"
        @click.away="isOpen = false"
        @keydown.escape.window="isOpen = false"
    >
        <form wire:submit.prevent="createServer" class="space-y-4 px-4 py-6">
            <div>
                <input wire:model.defer="name" type="text" class="w-full text-sm bg-gray-100 rounded placeholder-gray-900 border-none px-4 py-2"placeholder="Server Name">
            </div>
            <div>
                <input wire:model.defer="ip_address" type="text" class="w-full text-sm bg-gray-100 rounded placeholder-gray-900 border-none px-4 py-2"placeholder="IP Address">
            </div>
            <div class="flex justify-between">
                <button
                    x-on:click="isOpen = false"
                    class="px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:order-1 sm:ml-3"
                >Cancel</button>
                <button
                    type="submit"
                    class="px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:order-1 sm:ml-3"
                >Submit</button>
            </div>
        </form>
    </div>
</div>
