<?php

namespace App\Http\Livewire\Avatar;

use App\Handlers\ImageUploadHandler;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $avatar;

    protected $rules = [
        'avatar.blade.php' => 'mimes:png,jpg,gif,jpeg|dimensions:min_width=208,min_height=208',
    ];

    protected $messages = [
        'avatar.blade.php.mimes' =>'头像必须是 png, jpg, gif, jpeg 格式的图片',
        'avatar.blade.php.dimensions' => '图片的清晰度不够，宽和高需要 208px 以上',
    ];

    public function avatarUpload(ImageUploadHandler $uploader)
    {
        if (auth()->check()) {
            $this->validate();

            $result = $uploader->save($this->avatar, 'avatars', auth()->user()->id);
            if ($result) {
                $data['avatar'] = $result['path'];
                auth()->user()->update($data);
            }

            alert()->success('SuccessAlert','头像更新成功！');

            return redirect()->route('users.show', auth()->user()->id);
        }
    }

    public function render()
    {
        return view('livewire.avatar.upload');
    }
}
