<?php

namespace App\Http\Livewire\Shippings;
use App\Models\Shipping;
use Livewire\Component;

class Delete extends Component
{

    public $shippingId;



    public function getShippingProperty(){
        return Shipping::find($this->shippingId);
    }

    public function render()
    {
        return view('livewire.shippings.delete');
    }
    public function delete() {
        $this->shipping->delete();

        return redirect('/dashboard')->with('message', $this->shipping->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
