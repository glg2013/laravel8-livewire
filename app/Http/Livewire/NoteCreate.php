<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteCreate extends Component
{
    public $note;

    protected $rules = [
        'note' => 'required|min:2|max:20'
    ];

    public function noteSave()
    {
        if (auth()->check()) {
            $this->validate();

            // 创建
            auth()->user()->notes()->create([
                'note' => $this->note
            ]);

            $this->note = '';

            $this->emit('noteCreated');
        }
    }

    public function render()
    {
        return view('livewire.note-create');
    }
}
