<div class="create mb-4">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <form wire:submit.prevent="noteSave">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <div class="mt-2"><b>有错误发生：</b></div>
                <ul class="mt-2 mb-2">
                    @foreach ($errors->all() as $error)
                        <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="content">留言:</label>
            <textarea
                wire:model.defer="content"
                class="form-control @error('content') is-invalid @enderror" id="content" rows="3" placeholder="说点什么。。。"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">提交</button>
        <button class="btn btn-secondary" type="button" wire:click="show">弹出确认框测试</button>
            <button class="btn btn-secondary" type="button" wire:click="triggerConfirm">喜欢这个弹框吗</button>
    </form>
</div>
