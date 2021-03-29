<?php

namespace App\Http\Livewire;

use App\Models\Notes;
use Livewire\Component;

class NoteCreate extends Component
{
    public $content;

    protected $rules = [
        'content' => 'required|min:6|max:20',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'content' => 'required|min:6|max:20',
        ]);
    }

    public function noteSave()
    {
        if (auth()->check()) {

            $this->validate();

            auth()->user()->notes()->create([
                'content' => $this->content
            ]);

            $this->content = '';

            $this->emit('noteSaved');

        }
    }

    public function render()
    {
        return view('livewire.note-create');
    }
}
