<?php

declare(strict_types=1);

if (!function_exists('dashboard_logo')) {
    function dashboard_logo()
    {
        return asset('theme/dashboard/assets/images/logo-dark.svg');
    }
}
