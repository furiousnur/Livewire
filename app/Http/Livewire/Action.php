<?php

namespace App\Http\Livewire;

use http\Env\Request;
use Livewire\Component;

class Action extends Component
{
    public $age;
    public  $name = 'Nur Alam';
    public $a, $b;

    public $selectOption = 'Hello';

    public $loud = false;
    public $divHide = true;

    /*public function mount($age){
        $this->age = $age;
    }*/

    public function mount($name){
        $this->name = $name;
    }

    //hydrate function
    public function hydrate(){
        $this->name = 'hydrate@';
    }

    public function resetName(){
        $this->name = 'Meghla';
    }

    public function render()
    {
        return view('livewire.action');
    }
}
