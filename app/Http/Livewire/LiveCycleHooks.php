<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;

class LiveCycleHooks extends Component
{
    public $name = '';
    public $lastName = '';
    public $requestParam = '';
    public $users = [];
    public $hydrate = '';
    public $updated = '';
    public $updating = '';
    public $newUpdatedName = '';
    //public $foo = '';



    /**
     * Esse mount seria tipo um construtor.
     * Somente esse meteodo pode ser usado para REQUEST
     */
    public function mount(Request $request)
    {
        $this->name = 'Eduardo';
        $this->lastName = 'Trés';
        $this->requestParam = $request->input('name');
        $this->users = User::all();
    }

    /**
     * É Executado quando um elemento do componente for atualizado
     * Meteodo now() é do Carbon pega a data/hora
     */
    public function hydrate(){
        $this->hydrate = now();
    }

    /**
     * Ele é executado quando um model é executado
     * Ele executa em todos
     * Meteodo now() é do Carbon pega a data/hora
     */
    public function updated(){
        $this->updated = now();
    }

    /**
     * Ele é executado antes do updated
     * Ele é executado quando um model é executado
     * Meteodo now() é do Carbon pega a data/hora
     */
    public function updating(){
        $this->updating = now();  
        sleep(2);
    }

    /**
     * É executado conforme a propriedade
     */
    /*
    public function updatedFoo(){
        $this->newUpdatedName = 'Name foi atualizado';    
    }*/

    /**
     * É executado conforme a propriedade Name
     */
    public function updatedName(){
        $this->newUpdatedName = 'Name foi atualizado';    
    }

    public function randomName(){
        $names = ['Eduardo', 'Antonio', 'Joao', 'José'];
        $this->name = $names[rand(0,2)];
    }

    public function render()
    {
        return view('livewire.live-cycle-hooks');
    }
}
