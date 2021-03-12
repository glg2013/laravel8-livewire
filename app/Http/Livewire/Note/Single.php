<?php

namespace App\Http\Livewire\Note;

use App\Models\Notes;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Single extends Component
{
    use AuthorizesRequests;

    public $content;

    public function mount(Notes $content)
    {
        $this->content = $content;
    }

    public function delConfirm()
    {
        $this->emit('deleteNoteId', $this->content->id);
        $this->confirm('你确定删除此留言吗?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' => '立刻马上',
            'cancelButtonText' => '再想想',
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function render()
    {
        return view('livewire.note.single');
    }
}
