<?php

namespace App\Http\Livewire\Server;

use App\Models\Server;
use Livewire\Component;

class AddServer extends Component
{
    public $name;
    public $ip_address;

    protected $rules = [
        'name' => 'required',
        'ip_address' => 'required'
    ];

    public function createServer()
    {
        $this->validate();

        Server::create([
            'name' => $this->name,
            'ip_address' => $this->ip_address,
        ]);

        $this->reset();

        return redirect()->route('server.index');

    }

    public function render()
    {
        return view('livewire.server.add-server');
    }
}
