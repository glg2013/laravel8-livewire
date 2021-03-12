<div class="row row-cols-2 align-items-center">
    <div class="media mb-4 col-10">
        <img class="img-responsive img-circle mr-3" src="{{ $content->user->avatar }}" alt=" " width="100px" height="100px">
        <div class="media-body">
            <h5 class="mt-0">{{ $content->user->name }}</h5>
            <h6 class="small">发表于{{ $content->created_at->diffForHumans() }}</h6>
            {{ $content->id }} - {{ $content->content }}
        </div>
    </div>
    <div class="action col-2">
        @can('destroy', $content)
            <button class="btn btn-sm btn-danger" type="button" wire:click="delConfirm">删除</button>
        @endcan
    </div>
</div>
<hr>
