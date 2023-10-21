<div class="grid grid-cols-4 text-lg text-center">
    <div class="col-span-3 py-2">
        {{ $guest->name }}
    </div>
    <div>
        <input type="checkbox" wire:model.change='arrival' class="py-2" wire:loading.attr='disabled'>
    </div>
</div>
