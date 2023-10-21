<?php

namespace App\Livewire;

use App\Models\Table;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Todo extends Component
{
    #[Reactive]
    public $search = '';

    #[Computed]
    public function tables() {
        return Table::when($this->search,function($q) {
            $q->whereRelation('invitados', 'name', 'like', '%'.$this->search.'%');
        })->get();
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
