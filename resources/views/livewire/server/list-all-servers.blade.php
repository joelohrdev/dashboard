<div>
    <div class="grid grid-cols-3 gap-4 sm:grid-cols-3">
        @forelse($servers as $server)
            <livewire:server.list-all-servers-single
                :key="$server->id"
                :server="$server"
            />
        @empty
            <p>No Servers Added</p>
        @endforelse
    </div>
</div>
