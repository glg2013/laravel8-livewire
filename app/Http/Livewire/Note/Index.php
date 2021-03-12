<?php

namespace App\Http\Livewire\Note;

use App\Models\Notes;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public $noteId = 0;

    protected $listeners = [
        'noteCreated',
        'deleteNoteId',
        'confirmed'
    ];

    protected $paginationTheme =  'bootstrap';

    public function noteCreated()
    {
        //session()->flash('success', '留言成功!');
        $this->alert('success', '留言成功!', [
            'position' =>  'center',
            'timer' =>  2000,
            'toast' =>  false,
            'text' =>  '',
            'confirmButtonText' =>  '确定',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);
    }

    public function deleteNoteId($noteId)
    {
        $this->noteId = $noteId;
    }

    public function confirmed()
    {
        $note = Notes::find($this->noteId);

        $this->authorize('destroy', $note);

        $note->delete();

        $this->noteDeleted();
    }

    private function noteDeleted() {
        //session()->flash('success', '留言成功删除!');
        $this->alert('success', '留言成功删除!', [
            'position' =>  'center',
            'timer' =>  1500,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  '确定',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function render()
    {
        return view('livewire.note.index', [
            'notes' =>  Notes::with('user')->orderByDesc('created_at')->paginate(10),
        ]);
    }
}
