<div
    x-data="{ isOpen: false }"
    class="relative"
>
    <button
        @click="isOpen = !isOpen"
        type="button"
        class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:order-1 sm:ml-3"
    >
        Add Domain
    </button>
    <div
        class="absolute right-0 z-10 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-lg ring-1 ring-black ring-opacity-5 rounded mt-2"
        x-cloak
        x-show.transition.origin.top.right="isOpen"
        @keydown.escape.window="isOpen = false"
    >
        <form wire:submit.prevent="addDomain" class="space-y-4 px-4 py-6">
            <div>
                <input wire:model.defer="name" type="text" class="w-full text-sm bg-gray-100 rounded placeholder-gray-900 border-none px-4 py-2" placeholder="Domain Name" required>
            </div>
            <div>
                <input wire:model.defer="domain" type="text" class="w-full text-sm bg-gray-100 rounded placeholder-gray-900 border-none px-4 py-2" placeholder="URL" required>
            </div>
            <div>
                <select wire:model.defer="server_id" name="category_add" id="category_add" class="w-full bg-gray-100 text-sm rounded border-none px-4 py-2">
                    @foreach ($servers as $server)
                        <option value="{{ $server->id }}">{{ $server->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select wire:model.defer="managed" name="category_add" id="category_add" class="w-full bg-gray-100 text-sm rounded border-none px-4 py-2">
                    <option value=""></option>
                    <option value="1">Us</option>
                    <option value="0">Client</option>
                </select>
            </div>
            <div>
                <input wire:model.defer="registrar" type="text" class="w-full text-sm bg-gray-100 rounded placeholder-gray-900 border-none px-4 py-2"placeholder="Registrar">
            </div>
            <div>
                <input wire:model.defer="expires" type="date" class="w-full text-sm bg-gray-100 rounded placeholder-gray-900 border-none px-4 py-2"placeholder="Registrar">
            </div>
            <div>
                <textarea wire:model.defer="notes" name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl border-none placeholder-gray-900 text-sm px-4 py-2" placeholder="Notes"></textarea>
                @error('notes')
                <p class="text-red text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button
                    type="submit"
                    class="px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:order-1 sm:ml-3"
                >Submit</button>
            </div>
        </form>
    </div>
</div>
