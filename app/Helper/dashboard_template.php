<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

if (!function_exists('dashboard_logo')) {
    function dashboard_logo()
    {
        return asset('theme/dashboard/assets/images/logo-dark.svg');
    }
}

if (!function_exists('prepareTableColumnContent')) {

    function prepareTableColumnContent($content, string|null $column = null): mixed
    {
        if ($column === 'content') {
            return Str::limit(strip_tags($content), 50);
        }

        if ($column === 'created_at') {
            return $content->format('d.m.Y H:i:s');
        }

        if ($column === 'updated_at') {
            return $content->format('d.m.Y H:i:s');
        }

        if ($column === 'image') {
            return new \Illuminate\Support\HtmlString('<img src="' . $content . '" alt="" class="img-fluid" style="max-width: 100px;max-height: 100px;">');
        }

        if ($content instanceof \Illuminate\Support\HtmlString) {
            return Str::limit(strip_tags($content->toHtml()), 50);
        }

        if (is_array($content)) {
            return implode(', ', $content);
        }

        if (is_object($content)) {
            return $content->format('d.m.Y H:i:s');
        }

        if (is_bool($content)) {
            return $content ? 'Evet' : 'Hayır';
        }

        if (is_null($content)) {
            return '—';
        }

        if (is_numeric($content)) {
            return number_format($content, 2, ',', '.');
        }

        // image
        // if (is_string($content) && Str::contains($content, ['jpg', 'jpeg', 'png', 'gif'])) {
        // return new \Illuminate\Support\HtmlString('<img src="' . $content . '" alt="" class="img-fluid" style="max-width: 100px;max-height: 100px;">');
        // }

        if (is_string($content)) {
            $text = strip_tags($content);
            return Str::limit($content, 50);
        }

        return $content;
    }
}

if (!function_exists('isRoute')) {
    function isRoute(string $url): bool|string|null
    {
        $route = Route::getRoutes()->match(app('request')->create($url));

        if ($route) {
            return $route->getName();
        }

        return false;
    }
}

if (!function_exists('findRouteName')) {
    function findRouteName(string $url): bool|string|null
    {
        return isRoute($url);
    }
}

if (!function_exists('canAction')) {
    function canAction(string $routeName): bool
    {
        return true;
    }
}
