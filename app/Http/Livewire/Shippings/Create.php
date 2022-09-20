<?php

namespace App\Http\Livewire\Shippings;

use App\Models\Shipping;
use Livewire\Component;

class Create extends Component
{
    public $name,$amount,$address;

    public function addShipping(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'amount'             => ['required'],
                'address'           => ['required','string','max:255'],
            ]);

            Shipping::create([
                'name'        => $this->name,
                'amount'             => $this->amount,
                'address'           => $this->address,
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }



    public function render()
    {
        return view('livewire.shippings.create');
    }
}
