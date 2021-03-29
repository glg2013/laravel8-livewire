<div class="mb-4">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit.prevent="noteSave">
        <div class="form-group">
            <label for="note">留言：</label>
            <textarea
                wire:model.lazy="content"
                class="form-control @error('content') is-invalid @enderror" id="note" rows="3" placeholder="说点什么。。。"></textarea>
        </div>
        @error('content')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group">
            <button class="btn btn-primary" type="submit">提交</button>
        </div>
    </form>
</div>
