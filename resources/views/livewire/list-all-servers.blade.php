<div>
    @forelse($servers as $server)
        <div class="grid grid-cols-3 gap-4 sm:grid-cols-3">
            <livewire:list-all-servers-single
                :key="$server->id"
                :server="$server"
            />
        </div>
    @empty
        <p>No Servers Added</p>
    @endforelse
 </div>
