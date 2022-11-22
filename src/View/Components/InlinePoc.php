<?php

namespace Evulpo\VuiKit\View\Components;

use Illuminate\View\Component;
use Evulpo\VuiKit\Facades\Vui;

class InlinePoc extends Component 
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */

     public function render()
    {
        return <<<'blade'
            <div>
                <h1 class="text-font dark:text-iris-100">
                    This is an inline component from Vui Kit!        
                    {{ $slot }}
                </h1>
            </div>
        blade;

        // return view('inline-poc');

    }
}