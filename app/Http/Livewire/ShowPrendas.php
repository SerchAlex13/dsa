<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Prenda;

class ShowPrendas extends Component
{
    public $search;

    public function render()
    {
        $prendas = Prenda::where('nombre', 'like', '%' . $this->search . '%')->get();

        return view('livewire.show-prendas', compact('prendas'))->layout('components.navegacion');
    }
}
