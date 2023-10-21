<?php
use function Laravel\Folio\name;
use function Livewire\Volt\{state};
use function Livewire\Volt\{on};
use App\Models\Table;

name('index');

state(['search' => '', 'tableNumber' => 0]);

on(['showGuests' => function($tableNumber){
    $this->tableNumber = $tableNumber;
}])

?>
<x-app-layout>
    @volt
    <div>
        <input type="text" class="w-full" wire:model.live='search'>

        <livewire:todo :search="$search">

        <livewire:modal>

    </div>
    @endvolt


</x-app-layout>

