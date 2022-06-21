<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{

    public $title;
    public $name;
    public $infos = [];

    public function mount(){
        $this->infos[] = 'Application is mounting...';
    }

    public function hydrate(){
        $this->infos[] = 'Application is hyderating...';
    }

    public function updating($name,$value){
        $this->infos[] = 'Application is updating...';
    }

    public function updated($name,$value){
        $this->infos[] = 'Application is updated';
    }

    public function updatingName($name,$value){
        $this->infos[] = 'Application is updating name...';
    }

    public function updatedName($name,$value){
        $this->infos[] = 'Application is updated name...';
    }

    public function render()
    {
        return view('livewire.product');
    }
}
