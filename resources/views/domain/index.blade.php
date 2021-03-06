<x-app-layout>
    <x-slot name="title">
        {{ __('Domains') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <livewire:domain.list-all-domains/>
            </div>
        </div>
    </div>
</x-app-layout>
