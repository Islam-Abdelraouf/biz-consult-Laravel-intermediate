<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class pageNavigationHeader extends Component
{
    public $createActionButton = false;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $headerTitle =
        'Please provide a title ...',       // if the header's title is missing
        
        public $btnCaption = '',            //defaults : no button to render
        public $btnColor = '',              //defaults : no button to render
        public $btnHref = ''                //defaults : no button to render
    ) {
        // "createActionButton" is true, if the user provides all button's details
        $this->createActionButton = isset($btnCaption) && isset($btnColor) && isset($btnHref);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-navigation-header');
    }
}
