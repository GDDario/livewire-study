<div>
    @foreach($this->users as $user)
        {{ $user->name }} | {{ $user->email }}

        <br>
    @endforeach

    {{ $this->users->links() }}
</div>
