<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Empresa;

class EmpresaForm extends Component
{
    public $empresa;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Empresa $empresa)
    {
        $this->empresa = $empresa;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.empresa-form');
    }
}
