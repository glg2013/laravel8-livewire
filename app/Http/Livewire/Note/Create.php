<?php

namespace App\Http\Livewire\Note;

use Livewire\Component;

class Create extends Component
{
    public $content;

    protected $rules = [
        'content' => 'required|min:2|max:10'
    ];

    public function noteSave()
    {
        if (auth()->check()) {
            $this->validate();

            auth()->user()->notes()->create([
                'content'   =>  $this->content
            ]);

            $this->reset('content');

            $this->emit('noteCreated');
        }
    }

    public function render()
    {
        return view('livewire.note.create');
    }
}
