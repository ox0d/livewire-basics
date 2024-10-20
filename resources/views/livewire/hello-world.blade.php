<div class="flex flex-col items-center justify-center m-10">
    <h1 class="font-bold underline">Hello from livewire component!</h1>
    <div class="flex flex-col items-center justify-center">
        <span>Time is: {{ Carbon\Carbon::now() }}</span>
        <button type="button" wire:click="$refresh">Refresh</button>
    </div>
</div>