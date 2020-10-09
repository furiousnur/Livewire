<?php

namespace App\Http\Livewire;
use http\Env\Request;
use Livewire\WithFileUploads;
use Livewire\Component;

class Contract extends Component
{
    use WithFileUploads;

    public $photo;
    public $name;
    public $email;
    public $phone;
    public $msg;
    public $updateMode = false;

    public function updated($fields){
        $this->validateOnly($fields,[
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required|numeric',
           'msg' => 'required|string',
//            'photo' => 'image|max:1024|required',
        ]);
    }

    public function store(){
        $validatedDate = $this->validate([
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required|numeric',
           'msg' => 'required|string',
//            'photo' => 'image|max:1024|required',
        ]);

        Contract::create($validatedDate);
        return redirect()->to('users-list');
    }

    public function render()
    {
        return view('livewire.contract');
    }
}
