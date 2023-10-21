<?php
use function Laravel\Folio\name;
use function Livewire\Volt\{state};
use App\Models\Table;

name('index');

state(['search' => '']);

?>
<x-app-layout>
    @volt
    <div>
        <input type="text" class="w-full" wire:model.live='search'>

        <livewire:todo :search="$search">

    </div>
    @endvolt


</x-app-layout>

