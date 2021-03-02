<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteCreate extends Component
{
    public $note;

    protected $rules = [
        'note' => 'required|min:3|max:20'
    ];

    public function noteSave()
    {
        if (auth()->check()) {
            $this->validate();

            auth()->user()->notes()->create([
                'note'  =>  $this->note
            ]);

            $this->reset(['note']);

            $this->emit('noteCreated');

        }
    }

    public function render()
    {
        return view('livewire.note-create');
    }
}
