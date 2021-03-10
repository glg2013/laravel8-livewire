<?php

namespace App\Http\Livewire\Note;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Create extends Component
{
    public $content;

    protected $listeners = [
        'confirmed',
        'cancelled',
    ];

    protected $rules = [
        'content' => 'required|min:2|max:10'
    ];

    public function confirmed()
    {
        // Example code inside confirmed callback

        $this->alert(
            'success',
            '感谢你点击了确认按钮.'
        );
    }

    public function cancelled()
    {
        // Example code inside cancelled callback

        $this->alert('info', '真的不喜欢吗？');
    }

    public function noteSave()
    {
        if (auth()->check()) {

            //$this->validate();

            $validator = Validator::make(
                ['content' => $this->content],
                ['content' => 'required|min:2|max:10'],
//                ['required' => 'The :attribute field is required']
            );

            if ($validator->fails()) {
                $this->alert('error', '有错误发生!', [
                    'position' =>  'center',
                    'timer' =>  3000,
                    'toast' =>  false,
                    'text' =>  '',
                    'confirmButtonText' =>  'Ok',
                    'cancelButtonText' =>  'Cancel',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  true,
                ]);
            } else {
                auth()->user()->notes()->create([
                    'content'   =>  $this->content
                ]);

                $this->reset('content');

                $this->emit('noteCreated');

                $this->alert('success', '留言成功!', [
                    'position' =>  'center',
                    'timer' =>  3000,
                    'toast' =>  false,
                    'text' =>  '',
                    'confirmButtonText' =>  'Ok',
                    'cancelButtonText' =>  'Cancel',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  true,
                ]);
            }
        }
    }

    public function show()
    {
        $this->alert('info', '弹出确认框测试!', [
            'position' =>  'center',
            'timer' =>  3000,
            'toast' =>  false,
            'text' =>  '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);
    }

    public function triggerConfirm()
    {
        $this->confirm('你喜欢这个弹出框样式吗?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Nope',
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function render()
    {
        return view('livewire.note.create');
    }
}
