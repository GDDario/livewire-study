<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div>{{$counter}}</div>

    <br>

    <x-primary-button wire:click="count">
        +1
    </x-primary-button>

    <br>
    <br>

    <x-text-input wire:model.live="counter" />
    <x-primary-button wire:click="refresh">Refresh</x-primary-button>

    <br>
    <br>

    <p>Name: {{$name}}</p>
    <p>Last name: {{$lastName}}</p>
</div>
