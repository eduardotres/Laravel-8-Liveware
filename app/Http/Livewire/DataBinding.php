<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBinding extends Component
{
    public $name = 'Eduardo';
    public $age = 21;
    public $show = false;
    public $select = 'php';

    public function render()
    {
        return view('livewire.data-binding');
    }
}
