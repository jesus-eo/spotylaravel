<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $contador = 10;

    public function render()
    {
        /* Esto mostrara la vista livewire.contador en el $slot de la vista layouts.guest */
        return view('livewire.contador')->layout('layouts.guest');
    }

    public function incrementar()
    {
        $this->contador++;
    }
}
