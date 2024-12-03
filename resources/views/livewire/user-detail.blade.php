<div>
    User: {{$user->name}} :: {{$user->email}}

    <br>
    <br>

    <x-text-input wire:model.live="user.name"/>
</div>
