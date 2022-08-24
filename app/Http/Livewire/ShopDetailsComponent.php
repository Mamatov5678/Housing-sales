<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-details-component')->layout('layouts.app');
    }
}
