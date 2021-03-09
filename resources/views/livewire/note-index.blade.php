<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <livewire:note-create/>

    @foreach($notes as $msg)
        <livewire:note-single :note="$msg" :key="$msg->id"/>
    @endforeach

    @if(count($notes) > 0)
        {{ $notes->links() }}
    @endif

</div>
