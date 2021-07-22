<?php

namespace App\Http\Livewire;

use App\Models\Server;
use Livewire\Component;

class ListAllServers extends Component
{
    public function render()
    {
        return view('livewire.list-all-servers', [
            'servers' => Server::all()
        ]);
    }
}
