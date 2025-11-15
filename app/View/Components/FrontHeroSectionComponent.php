<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Hero;

class FrontHeroSectionComponent extends Component
{
    public $hero;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->hero = Hero::findOrFail(1);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-hero-section-component');
    }
}
