<?php

namespace App\Http\Livewire\Librarian;

use App\Models\member;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Addmember extends Component
{
    public $result;
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name'=>'required',
        'email'=>'required',
    ];

    public function render()
    {
        return view('livewire.librarian.addmember');
    }

    public function addMember(){
        $member = $this->validate();
        $member['password'] = Hash::make($this->password);
        member::create($member)
            ? $this->result = 'Member Added Successfully'
            : $this->result = 'Something went wrong';
    }
}
