<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardWithHeader extends Component
{
    public $header;
    public $display;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($header,$display='')
    {
        $this->header = $header;
        $this->display = $display;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-with-header');
    }
}
