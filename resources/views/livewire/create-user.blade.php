<form wire:submit="submit" class="flex flex-col gap-4">
    <div>
        <x-text-input palceholder="User name" wire:model.blur="form.name"></x-text-input>
        @error('form.name')
        <div><span class="text-sm italic font-semibold text-red-400">{{$message}}</span>
        </div>
        @enderror
    </div>
    <div>
        <x-text-input palceholder="Email" wire:model.blur="form.email"></x-text-input>
        @error('form.email')
        <div><span class="text-sm italic font-semibold text-red-400">{{$message}}</span>
        </div>
        @enderror
    </div>
    <div>
        <x-text-input palceholder="Password" wire:model.blur="form.password" type="password"></x-text-input>
        @error('form.password')
        <div><span class="text-sm italic font-semibold text-red-400">{{$message}}</span>
        </div>
        @enderror
    </div>
    <div>
        <x-text-input palceholder="Password Confirmation" wire:model.blur="form.passwordConfirmation" type="password"></x-text-input>
    </div>

    <div>
        <x-primary-button>
            Save user
        </x-primary-button>
    </div>
</form>
