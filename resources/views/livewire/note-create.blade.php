<div class="create mb-4">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <form wire:submit.prevent="noteSave">
        <div class="form-group">
            <label for="content">留言：</label>
            <textarea
                wire:model.defer="content"
                class="form-control @error('content') is-invalid @enderror" id="content" rows="3" placeholder="说点什么。。。"></textarea>
        </div>
        @error('content')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <button class="btn btn-primary" type="submit">提交</button>
    </form>
</div>
