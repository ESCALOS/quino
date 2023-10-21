<?php

namespace App\Livewire;

use App\Models\Guest as ModelsGuest;
use Livewire\Component;

class Guest extends Component
{
    public ModelsGuest $guest;
    public bool $arrival;

    public function mount() {
        $this->arrival = $this->guest->is_arrival;
    }

    public function updatedArrival() {
        $this->guest->is_arrival = $this->arrival;
        $this->guest->save();
    }

    public function render()
    {
        return view('livewire.guest');
    }
}
