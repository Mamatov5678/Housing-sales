<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LocationsComponent extends Component
{
    public function render()
    {
        return view('livewire.locations-component')->layout('layouts.app');
    }
}
