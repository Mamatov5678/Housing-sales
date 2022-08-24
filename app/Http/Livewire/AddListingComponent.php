<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddListingComponent extends Component
{
    public function render()
    {
        return view('livewire.add-listing-component')->layout('layouts.app');
    }
}
