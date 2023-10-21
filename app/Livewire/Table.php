<?php

namespace App\Livewire;

use App\Models\Guest;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Table extends Component
{
    public $tableId;
    public $tableNumber;

    #[Computed]
    public function status() {

        if($this->arrivalGuests() == $this->total()) {
            return 'bg-indigo-500';
        }

        if($this->arrivalGuests() < $this->total()) {
            return 'bg-primary-500';
        }


    }
    #[Computed]
    public function arrivalGuests() {
        return Guest::where('table_id',$this->tableId)->where('is_arrival',true)->count();
    }
    #[Computed]
    public function total() {
        return Guest::where('table_id',$this->tableId)->count();
    }

    public function render()
    {
        return view('livewire.table');
    }
}
