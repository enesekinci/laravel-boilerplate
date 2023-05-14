<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuLink extends Component
{
    public function __construct(
        public string $url,
        public string $title,
        public string $icon
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu-link', []);
    }
}
