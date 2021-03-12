<?php

namespace App\Policies;

use App\Models\Notes;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotesPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destroy(User $currentUser, Notes $notes)
    {
        return $currentUser->id === $notes->user_id;
    }
}
