<?php

namespace App\Http\Livewire\Server;

use Livewire\Component;

class DeleteServer extends Component
{
    public $server;

    public function mount(Server $server)
    {
        $this->server = $server;
    }

    public function deleteServer()
    {
        Server::destroy($this->server->id);
    }

    public function render()
    {
        return view('livewire.server.delete-server');
    }
}
