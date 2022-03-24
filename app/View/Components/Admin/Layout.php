<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Layout extends Component
{
    public $title;

    /**
     * Class constructor.
     */
    public function __construct( $title = null )
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.layout');
    }
}
