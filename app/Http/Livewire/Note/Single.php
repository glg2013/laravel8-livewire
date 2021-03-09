<?php

namespace App\Http\Livewire\Note;

use Livewire\Component;

class Single extends Component
{
    public $note;

    public function mount($note)
    {
        $this->note = $note;
    }

    public function render()
    {
        return view('livewire.note.single');
    }
}
