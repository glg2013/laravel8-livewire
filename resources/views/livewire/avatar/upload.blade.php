<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <form wire:submit.prevent="avatarUpload" enctype="multipart/form-data">

        <div>
            @include('shared._error')
        </div>

        @if ($avatar)
            头像预览:
            <img src="{{ $avatar->temporaryUrl() }}">
        @endif

        <div class="form-group">
            <label for="exampleInputName">头像:</label>
            <input type="file" class="form-control" id="exampleInputName" wire:model="avatar">
            @error('avatar') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-success">上传头像</button>
    </form>
</div>
