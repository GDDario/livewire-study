<div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>

            <br>
        @endif
    </div>

    <x-text-input
        placeholder="Do not enter y"
        wire:model="value"
        wire:keydown.prevent.y="replaceYInput"
    />
</div>
