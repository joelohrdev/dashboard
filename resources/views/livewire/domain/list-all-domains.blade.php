<div>
    @forelse($domains as $domain)
        {{ $domain->name }}
    @empty
        No Domains
    @endforelse
</div>
