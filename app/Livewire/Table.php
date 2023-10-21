<?php

namespace App\Livewire;

use App\Models\Guest;
use App\Models\Table as ModelsTable;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Table extends Component
{
    public ModelsTable $table;

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
        return Guest::where('table_id',$this->table->id)->where('is_arrival',true)->count();
    }
    #[Computed]
    public function total() {
        return Guest::where('table_id',$this->table->id)->count();
    }

    #[On('table-updated.{table.id}')]
    public function refreshTable() {
        $this->render();
    }

    public function render()
    {
        return view('livewire.table');
    }
}
