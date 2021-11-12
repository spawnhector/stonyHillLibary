<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $type;
    public $email;
    public $password;
    public $result;

    protected $rules=[
        'email'=>'required',
        'password'=>'required|min:6',
    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $cred = $this->validate();
        $cred['role'] = $this->type;
        Auth::attempt($cred)
            ? $this->redirecTo()
            : $this->result = 'Something went wrong';
    }

    public function redirecTo()
    {
        return redirect()->route($this->type);
    }
}
