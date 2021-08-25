<?php

namespace App\Http\Livewire\Domain;

use App\Models\Domain;
use Livewire\Component;

class ListAllDomains extends Component
{
    public function render()
    {
        return view('livewire.domain.list-all-domains', [
            'domains' => Domain::all()
        ]);
    }
}
