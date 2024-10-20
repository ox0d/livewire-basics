<div class="flex flex-col items-center justify-center m-10">
    <button type="button" wire:click="incrementI(5)">Increment</button>
    <span>{{ $counter }}</span>
    <button type="button" wire:click="decrement">Decrement</button>
    <button type="button" wire:click="resetCounter">Reset</button>
</div>