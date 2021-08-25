<x-app-layout>
    <x-slot name="title">
        {{ __('Servers') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <livewire:server.list-all-servers/>
            </div>
        </div>
    </div>
</x-app-layout>
