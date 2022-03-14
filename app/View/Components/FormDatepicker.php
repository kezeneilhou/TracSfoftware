<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormDatepicker extends Component
{
    public $name;
    public $label;
    public $col;
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public function __construct($name,$label,$col)
     {
         $this->name = $name;
         $this->label = $label;
         $this->col = $col;
     }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-datepicker');
    }
}
