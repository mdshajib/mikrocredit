<?php

namespace App\Http\Livewire\Dashboard;

use App\Http\Livewire\BaseComponent;

class Dashboard extends BaseComponent
{
    public function render()
    {
        return $this->view('livewire.dashboard.dashboard');
    }
}
