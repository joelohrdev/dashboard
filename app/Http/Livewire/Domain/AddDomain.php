<?php

namespace App\Http\Livewire\Domain;

use App\Models\Domain;
use App\Models\Server;
use Livewire\Component;

class AddDomain extends Component
{
    public $name;
    public $slug;
    public $server_id = 1;
    public $domain;
    public $registrar;
    public $managed;
    public $expires;
    public $notes;

    protected $rules = [
        'name' => 'required',
        'server_id' => 'required',
        'domain' => 'required',
        'registrar' => 'nullable',
        'managed' => 'nullable',
        'expires' => 'nullable',
        'notes' => 'nullable'
    ];

    public function addDomain()
    {
//        $this->validate();

        Domain::create([
            'name' => $this->name,
            'server_id' => $this->server_id,
            'domain' => $this->domain,
            'registrar' => $this->registrar,
            'managed' => $this->managed,
            'expires' => $this->expires,
            'notes' => $this->notes
        ]);

        $this->reset();

        return redirect()->route('domain.index');
    }

    public function render()
    {
        return view('livewire.domain.add-domain', [
            'servers' => Server::all()
        ]);
    }
}
