<?php

namespace App\Http\Livewire\Shippings;
use App\Models\Shipping;
use Livewire\Component;

class Edit extends Component
{

    public $shippingId;
    public $name,$amount,$address;


    public function mount(){

        $this->name = $this->shipping->name;
        $this->amount = $this->shipping->amount;
        $this->address = $this->shipping->address;

    }

    public function editShipping()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'amount'             => ['required'],
            'address'           => ['required','string','max:255'],
        ]);

        $this->shipping->update([
            'name'=> $this->name,
            'amount'=> $this->amount,
            'address'=> $this->address,
        ]);

        return redirect('/dashboard')->with('message', $this->shipping->name .' updated successfully');
    }


    public function getShippingProperty(){
        return Shipping::find($this->shippingId);
    }

    public function render()
    {
        return view('livewire.shippings.edit');
    }
}
