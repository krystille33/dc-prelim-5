<?php

namespace App\Http\Livewire\Shippings;

use App\Models\Shipping;
use Livewire\Component;

class Index extends Component
{
    public function loadShipping() {
        $shippings = Shipping::orderBy('name')->get();

        return compact('shippings');
    }

    public function render()
    {
        return view('livewire.shippings.index', $this->loadShipping());
    }
}
