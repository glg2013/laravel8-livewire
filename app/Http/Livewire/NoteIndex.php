<?php

namespace App\Http\Livewire;

use App\Models\Notes;
use Livewire\Component;
use Livewire\WithPagination;

class NoteIndex extends Component
{
    use WithPagination;

    protected $listeners = [
        'noteCreated'
    ];

    protected $paginationTheme = 'bootstrap';

    public function noteCreated()
    {
        session()->flash('success', '留言成功！');
    }

    public function render()
    {
        return view('livewire.note-index', [
            'notes' =>  Notes::with('user')->orderByDesc('created_at')->paginate(5)
        ]);
    }
}
