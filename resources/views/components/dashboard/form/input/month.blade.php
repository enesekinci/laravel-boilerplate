@php
    $monthsJson = '[{"key":"01","value":"January"},{"key":"02","value":"February"},{"key":"03","value":"March"},{"key":"04","value":"April"},{"key":"05","value":"May"},{"key":"06","value":"June"},{"key":"07","value":"July"},{"key":"08","value":"August"},{"key":"09","value":"September"},{"key":"10","value":"October"},{"key":"11","value":"November"},{"key":"12","value":"December"}]';
    $months = json_decode($monthsJson);
    $months = collect($months);
@endphp
<x-dashboard.form.input.selectbox id="{{ $id ?? $name }}" title="{{ $title }}" :options="$months" option="value" value="key" {{ $attributes }} />
