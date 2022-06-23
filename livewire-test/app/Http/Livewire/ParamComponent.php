<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ParamComponent extends Component
{
    public $paramm;
    public $name;

    public function mount($param = null){
        // dd($this->paramm);
        $this->paramm = $param;
        // dd($this->paramm);
    }

    public function render()
    {
        return view('livewire.param-component');
    }
}
