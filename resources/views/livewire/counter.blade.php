<div class="flex items-center">
    <button class="p-1" wire:click="decriment">-</button>
    <div class="text-gray-700 w-10 text-center p-1 m-2 rounded-lg border-2 border-gray-700">{{ $count }}</div>
    <button class="p-1" wire:click="increment">+</button>
</div>
