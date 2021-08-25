<x-app-layout>
    <x-slot name="title">
        {{ $server->name }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <livewire:server.show-server :server="$server"/>
                <livewire:server.list-related-domains :server="$server"/>
            </div>
        </div>
    </div>
</x-app-layout>
