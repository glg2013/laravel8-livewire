<div class="row row-cols-2 align-items-center">
    <div class="media mb-4 col-10">
        <svg class="bd-placeholder-img mr-3" width="64" height="64" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 64x64"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
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
