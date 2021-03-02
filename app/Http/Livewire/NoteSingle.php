<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteSingle extends Component
{
    public $note;

    public function mount($note)
    {
        return $this->note = $note;
    }

    public function render()
    {
        return view('livewire.note-single');
    }
}
