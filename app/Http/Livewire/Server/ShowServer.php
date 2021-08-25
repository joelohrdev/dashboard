<?php

namespace App\Http\Livewire\Server;

use App\Models\Server;
use Livewire\Component;

class ShowServer extends Component
{
    public $server;

    public function mount(Server $server)
    {
        $this->server = $server;
    }

    public function deleteServer()
    {
        Server::destroy($this->server->id);

        return redirect()->route('server.index');
    }

    public function render()
    {
        return view('livewire.server.show-server');
    }
}
