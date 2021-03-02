<div class="create mb-4">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <form wire:submit.prevent="noteSave">
        <div class="form-group">
            <label for="note">留言：</label>
            <textarea
                wire:model.lazy="note"
                class="form-control @error('note') is-invalid @enderror" id="note" rows="3" placeholder="说点什么。。。"></textarea>
        </div>
        @error('note')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

        <button type="submit" class="btn btn-primary">提交留言</button>
    </form>
</div>
