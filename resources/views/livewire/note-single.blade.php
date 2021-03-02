<div class="media mb-4">
    <svg class="bd-placeholder-img mr-3" width="64" height="64" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 64x64"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
    <div class="media-body">
        <h5 class="mt-0">{{ $note->user->name }}     {{ $note->created_at->diffForHumans() }}</h5>
        {{ $note->note }}
    </div>
</div>
<hr>
