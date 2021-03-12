<?php

namespace App\Http\Livewire\Note;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Create extends Component
{
    public $content;

    protected $rules = [
        'content' => 'required|min:5|max:20',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'content' => 'required|min:5|max:20',
        ]);
    }

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
