<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class pageNavigationFooter extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // if caption contains "" add <i></i>
        // if (!isset($icon) && isset($module)) {
        //     dd($href);
        //     if (str_contains($caption, 'dashboard')) {
        //         $icon = config('icons.dashboardIcon');
        //     } elseif (str_contains($caption, 'services')) {
        //         $icon = config('icons.servicesIcon');
        //     } elseif (str_contains($caption, 'features')) {
        //         $icon = config('icons.featuresIcon');
        //     } elseif (str_contains($caption, 'messages')) {
        //         $icon = config('icons.messagesIcon');
        //     } elseif (str_contains($caption, 'subscribers')) {
        //         $icon = config('icons.subscribersIcon');
        //     } elseif (str_contains($caption, 'testmonials')) {
        //         $icon = config('icons.testmonialsIcon');
        //     } elseif (str_contains($caption, 'members')) {
        //         $icon = config('icons.membersIcon');
        //     } elseif (str_contains($caption, 'publicSite')) {
        //         $icon = config('icons.publicSiteIcon');
        //     } elseif (str_contains($caption, 'heroSection')) {
        //         $icon = config('icons.heroSectionIcon');
        //     }
        //     $icon = "<i class='fe {{ $icon }} mr-2'></i>";
        // }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-navigation-footer');
    }
}
