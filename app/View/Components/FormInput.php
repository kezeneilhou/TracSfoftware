<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInput extends Component
{
    public $name;
    public $label;
    public $type;
    public $col;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$label,$type,$col = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->col = $col;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-input');
    }
}
