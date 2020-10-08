<?php

namespace App\Http\Livewire;
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

    public function updated($fields){
        $this->validateOnly($fields,[
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required|numeric',
           'msg' => 'required|string',
            'photo' => 'image|max:1024|required',
        ]);
    }

    public function submitForm(){
        $this->validate([
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required|numeric',
           'msg' => 'required|string',
            'photo' => 'image|max:1024|required',
        ]);

        $this->photo->store('photos');

        dd($this->name, $this->email, $this->phone, $this->msg, $this->photo);
    }

    public function render()
    {
        return view('livewire.contract');
    }
}
