<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComponentSon extends Component
{
    public $user = '';

    protected $listeners = ['updateSon' => '$refresh'];
    
    public function mount($user){
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.component-son');
    }
}
