<div class="px-4 py-12 {{ $this->status }} cursor-pointer" wire:click="$dispatch('show-table-modal', { tableId: {{ $table->id }}, tableNumber: {{ $table->number }} })">
    <h1>Mesa {{ $table->number }}</h1>
    <p>Invitados: {{ $this->arrivalGuests }}/{{ $this->total }}</p>
</div>
