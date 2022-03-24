<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Exception;

class AuthManager extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.public');
    }

    public function Login(){
        $this->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ],[
            'password.required' => 'The Password Field is required.',
            'email.required'    => 'The Email Field is required.',
            'email.email'       => 'Please enter valid Email address.'
        ]);
        try{
            if(!Auth::attempt(['email' => $this->email, 'password' => $this->password,'status' => 1])){
                throw new Exception('Access denied. Please enter valid credential.');
            }
            return redirect()->route('dashboard');
        }catch (Exception $ex){
            session()->flash('error', $ex->getMessage());
        }
    }
}
