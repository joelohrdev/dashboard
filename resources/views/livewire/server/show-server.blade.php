<div>
    {{ $server->name }}<br>
    {{ $server->ip_address }}
    <form wire:click.prevent="deleteServer">
        <button type="submit">Delete</button>
    </form>
</div>
