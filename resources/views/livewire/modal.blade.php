<x-dialog-modal wire:model.live='open'>
    <x-slot name="title">
        Mesa {{ $tableNumber }}
    </x-slot>

    <x-slot name="content">
        <div class="grid grid-cols-4 gap-4 text-center">
            <div class="col-span-3 py-4">
                Invitado
            </div>
            <div class="py-4">
                ¿Vinó?
            </div>
        </div>
       @foreach ($this->guests as $guest)
        <livewire:guest :guest="$guest" :key="$guest->id">
       @endforeach
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="$set('open', false)" wire:loading.attr="disabled">
            Cerrar
        </x-secondary-button>
    </x-slot>
</x-dialog-modal>
