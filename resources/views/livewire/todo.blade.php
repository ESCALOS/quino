<div class="flex flex-wrap justify-around gap-8 mt-4 text-center text-gray-900 flex-items-center dark:text-gray-100">
    @foreach ($this->tables as $table)
        <livewire:table :tableNumber="$table->number" :tableId="$table->id" :key="$table->id">
    @endforeach
</div>
