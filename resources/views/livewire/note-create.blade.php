<div class="create mb-4">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <form wire:submit.prevent="noteCreate">
        <div class="form-group">
            <label for="note">留言:</label>
            <textarea wire:model.defer="note"
                class="form-control @error('note') is-invalid @enderror" id="note" rows="3" placeholder="Password"></textarea>
        </div>
        @error('note')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <button class="btn btn-primary" type="submit">提交</button>
    </form>
</div>
