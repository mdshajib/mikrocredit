<?php

namespace App\Http\Livewire\Admin\User;

use App\Http\Livewire\BaseComponent;

class UserManager extends BaseComponent
{
    public function render()
    {
        return $this->view('livewire.admin.user.user-manager');
    }

    public function createNewUser(){
        return redirect()->route('user.create');
    }


}
