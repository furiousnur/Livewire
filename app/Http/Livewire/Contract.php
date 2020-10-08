<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contract extends Component
{
    public $name;
    public $email;
    public $phone;
    public $msg;

    public function updated($fields){
        $this->validateOnly($fields,[
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required|numeric',
           'msg' => 'required|string'
        ]);
    }

    public function submitForm(){
        $this->validate([
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required|numeric',
           'msg' => 'required|string'
        ]);

        dd($this->name, $this->email, $this->phone, $this->msg);
    }

    public function render()
    {
        return view('livewire.contract');
    }
}
