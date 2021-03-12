<div class="mb-4">
    {{-- The Master doesn't talk, he acts. --}}
    <form wire:submit.prevent="noteSave">
        <div class="form-group">
            <label for="content">留言：</label>
            <textarea
                wire:model.lazy="content"
                class="form-control @error('content') is-invalid @enderror" id="content" rows="3" placeholder="说点什么。。。"></textarea>
        </div>

        @error('content')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

        <div class="form-group">
            <button class="btn btn-primary" type="submit">提交留言</button>
        </div>
    </form>
</div>
<hr>
