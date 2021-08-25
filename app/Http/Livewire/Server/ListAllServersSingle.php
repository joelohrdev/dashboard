<?php

namespace App\Http\Livewire\Server;

use App\Models\Server;
use Livewire\Component;

class ListAllServersSingle extends Component
{
    public $server;

    public function mount(Server $server)
    {
        $this->server = $server;
    }

    public function render()
    {
        return view('livewire.server.list-all-servers-single');
    }
}
