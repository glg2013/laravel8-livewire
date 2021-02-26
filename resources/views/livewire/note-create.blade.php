<div class="create-note mb-4">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form wire:submit.prevent="noteSave">
        <div class="form-group">
            <label for="note">留言：</label>
            <textarea
                wire:model.defer="note"
                class="form-control" id="note" rows="3" placeholder="随意说点什么。。。"></textarea>
        </div>

        @error('note')
            <div class="error mb-2 alert alert-danger">
                {{ $message }}
            </div>
        @enderror

        <div class="form-group">
            <button class="btn btn-primary" type="submit">提交留言</button>
        </div>
    </form>
</div>
