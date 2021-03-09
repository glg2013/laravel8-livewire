<div>
    {{-- The Master doesn't talk, he acts. --}}
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(session()->has($msg))
            <div class="flash-message">
                <p class="alert alert-{{ $msg }}">
                    {{ session()->get($msg) }}
                </p>
            </div>
        @endif
    @endforeach

    <livewire:note.create />

    @foreach($notes as $note)
        <livewire:note.single :note="$note" :key="$note->id"/>
    @endforeach

    {{ $notes->links() }}

</div>
