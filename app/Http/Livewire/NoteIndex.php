<?php

namespace App\Http\Livewire;

use App\Models\Notes;
use Livewire\Component;
use Livewire\WithPagination;

class NoteIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'noteCreated'
    ];

    public function noteCreated()
    {
        session()->flash('success', '留言发送成功！');
    }

    public function render()
    {
        return view('livewire.note-index', [
            'notes' => Notes::with('user')->orderByDesc('created_at')->paginate(5)
        ]);
    }
}
