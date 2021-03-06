<div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
    <div class="flex-1 min-w-0">
        <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">

        </h1>
    </div>
    <div class="mt-4 flex sm:mt-0 sm:ml-4">
        @if(Request::route()->named('server.index'))
            <livewire:server.add-server/>
        @elseif(Request::route()->named('domain.index'))
            <livewire:domain.add-domain/>
        @endif
    </div>
</div>
