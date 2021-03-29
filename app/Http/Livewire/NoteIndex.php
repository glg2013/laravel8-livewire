<?php

namespace App\Http\Livewire;

use App\Models\Notes;
use Livewire\Component;
use Livewire\WithPagination;

class NoteIndex extends Component
{
    use WithPagination;

    protected $listeners = [
        'noteSaved'
    ];

    protected $paginationTheme = 'bootstrap';

    public function noteSaved()
    {
        //session()->flash('success', '留言成功！');
        $this->alert('success', '留言成功!', [
            'position' =>  'center',
            'timer' =>  3000,
            'toast' =>  false,
            'text' =>  '',
            'confirmButtonText' =>  '确定',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);
    }

    public function render()
    {
        return view('livewire.note-index', [
            'notes' => Notes::query()->with('user')->orderByDesc('created_at')->paginate(10)
        ]);
    }
}
