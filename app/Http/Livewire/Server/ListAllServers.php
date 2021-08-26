<?php

namespace App\Http\Livewire\Server;

use App\Models\Server;
use Livewire\Component;

class ListAllServers extends Component
{
    public function render()
    {
        return view('livewire.server.list-all-servers', [
            'servers' => Server::orderBy('name', 'ASC')->get()
        ]);
    }
}
