<div>
    <x-text-input placeholder="First number" wire:model="num1"/>

    <select wire:model="operation" class="text-slate-700">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <x-text-input placeholder="Second number" wire:model="num2"/>

    <x-primary-button wire:click="calculate">Calculate</x-primary-button>

    <br>
    Result: {{$result}}
</div>
