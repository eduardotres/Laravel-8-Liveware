<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ComponentDad extends Component
{
    public $users = ['Edu', 'Toninho', 'Jose', 'Joao'];

    public function mount(){
        $this->users = User::pluck('name', 'id');
    }

    public function updateSon()
    {
        $this->emit('Atualiza Filho');
    }

    public function render()
    {
        return view('livewire.component-dad');
    }
}
