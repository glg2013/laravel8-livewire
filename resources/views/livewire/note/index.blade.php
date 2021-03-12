<div>
    {{-- Stop trying to control. --}}

    <livewire:note.create />

    @foreach($notes as $note)
        <livewire:note.single :content="$note" :key="$note->id"/>
    @endforeach

    {{ $notes->links() }}

</div>
