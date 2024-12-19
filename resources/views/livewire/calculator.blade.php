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

    <br>
    Result: {{$result}}
</form>
