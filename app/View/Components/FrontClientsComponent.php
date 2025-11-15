<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Company;

class FrontClientsComponent extends Component
{
    public $companies;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->companies = Company::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-clients-component');
    }
}
