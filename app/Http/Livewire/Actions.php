<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Actions extends Component
{
    public $input = 'First';
    public $souza = 'First2';

    public function clear(){
        $this->input = '';
    }

    public function setValue(){
        $this->input = 'Edu';
    }

    public function setData($data){        
        $this->input = $data;
    }

    public function submit(){        
        $this->input = 'Send';
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
