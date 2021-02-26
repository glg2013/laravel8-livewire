<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <livewire:note-create />

    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id">
    @endforeach

    <div class="page-item">
        {{ $notes->links() }}
    </div>
</div>
