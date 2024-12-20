<form wire:submit="submit" class="flex flex-col gap-4">
    <div>
        <x-text-input palceholder="User name" wire:model.blur="name"></x-text-input>
        @error('name')
        <div><span class="text-sm italic font-semibold text-red-400">{{$message}}</span>
        </div>
        @enderror
    </div>
    <div>
        <x-text-input palceholder="Email" wire:model.blur="email"></x-text-input>
        @error('email')
        <div><span class="text-sm italic font-semibold text-red-400">{{$message}}</span>
        </div>
        @enderror
    </div>
    <div>
        <x-text-input palceholder="Password" wire:model.blur="password" type="password"></x-text-input>
        @error('password')
        <div><span class="text-sm italic font-semibold text-red-400">{{$message}}</span>
        </div>
        @enderror
    </div>
    <div>
        <x-text-input palceholder="Password Confirmation" wire:model.blur="passwordConfirmation" type="password"></x-text-input>
    </div>

    <div>
        <x-primary-button>
            Save user
        </x-primary-button>
    </div>
</form>
