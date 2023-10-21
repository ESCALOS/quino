<?php

namespace App\Livewire;

use App\Models\Guest;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Modal extends Component
{
    public $tableId;
    public $tableNumber;
    public $open = false;

    public function updatedOpen() {
        if(!$this->open){
            $this->dispatch('table-updated.'.$this->tableId);
        }
    }

    #[On('show-table-modal')]
    public function showTableModal($tableId,$tableNumber) {
        $this->tableId = $tableId;
        $this->tableNumber = $tableNumber;
        $this->open = true;
    }

    #[Computed]
    public function guests() {
        return Guest::select('id','name','is_arrival')->where('table_id',$this->tableId)->get();
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
