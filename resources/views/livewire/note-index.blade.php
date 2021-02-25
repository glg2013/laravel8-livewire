<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <livewire:note-create />


{{--    @foreach($notes as $note)--}}
{{--        <livewire:note-single :note="$note" :key="$note->id" />--}} <!-- 这里结尾 空格+/> 会导致分页报错。。。 -->
{{--    @endforeach--}}

    @foreach($notes as $note)
        <livewire:note-single :note="$note" :key="$note->id"/>
        <hr>
    @endforeach

    <div class="pagination mt-4">
        {{ $notes->links() }}
    </div>

</div>
