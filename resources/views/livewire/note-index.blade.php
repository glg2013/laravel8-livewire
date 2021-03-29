<div>
    {{-- The whole world belongs to you --}}

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <livewire:note-create />

    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id"/>
    @endforeach

    {{ $notes->links() }}

</div>
