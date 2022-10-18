<?php

namespace Evulpo\VuiKit\View\Components;

use Illuminate\View\Component;
use Evulpo\VuiKit\Facades\Vui;
use Evulpo\VuiKit\Traits\vuiBasic;
use Evulpo\VuiKit\Traits\vuiColors;

class Button extends Component
{
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
     public function render()
    {
        return view('vui::input');
    }

}