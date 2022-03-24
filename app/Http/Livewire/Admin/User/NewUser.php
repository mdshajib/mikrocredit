<?php

namespace App\Http\Livewire\Admin\User;

use App\Http\Livewire\BaseComponent;

class NewUser extends BaseComponent
{
    public function render()
    {
        return $this->view('livewire.admin.user.new-user');
    }

    public function cancelNewUser()
    {
        return redirect()->route('user.list');
    }

    public function createNewUser()
    {
        $this->alertMessage();
    }
}
