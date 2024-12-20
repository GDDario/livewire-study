<div>
    <form wire:submit.throttle.1s="calculate">
        <x-text-input placeholder="First number" wire:model="num1"/>

        <select wire:model="operation" class="text-slate-700">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <x-text-input placeholder="Second number" wire:model="num2"/>

        <x-primary-button type="submit">Calculate</x-primary-button>
        <x-primary-button type="submit" @click="$wire.calculate()">Calculate (alpine)</x-primary-button>


        <span wire:loading wire:target="calculate" class="text-blue-500 font-bold italic">
        Calculating...
    </span>

        <br>
        Result: {{$result}}

        <br>
    </form>

    <x-primary-button wire:click="add10('num1')">
        Add 10 to num 1
    </x-primary-button>

    <x-primary-button wire:click="add10('num2')">
        Add 10 to num 2
    </x-primary-button>

    <x-primary-button wire:click="log">
        Log only
    </x-primary-button>

</div>
