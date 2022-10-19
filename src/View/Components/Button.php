<?php

namespace Evulpo\VuiKit\View\Components;

use Illuminate\View\Component;
use Evulpo\VuiKit\Facades\Vui;
use Evulpo\VuiKit\Traits\vuiBasic;
use Evulpo\VuiKit\Traits\vuiColors;

class Button extends Component
{
    use vuiBasic;
    use vuiColors;

    public $color;
    public $size;
    public $style;
    // public $isDark = false;
    
    public $sizeStyle = [
        'sm' => ['px-3','py-1','text-sm'],
        'md' => ['px-4','py-2'],
        'lg' => ['px-8','py-3']
    ];


    // /**
    //  * Create a new component instance.
    //  *
    //  * @param string $element 
    //  * @param string $color 
    //  * @param string $size 
    //  * 
    //  * @return void
    //  */
    public function __construct(
        $color = "",
        $size = ""
    ) {
        $this->color = $color == '' ? config('vui.theme') : $color;
        $this->size = $size == '' ? config('vui.size') : $size;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {

        return view('vui::btnsrctest');

    }
}
