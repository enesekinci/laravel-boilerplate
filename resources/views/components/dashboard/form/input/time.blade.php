@php
    $value = $attributes->get('value');
    // hour:minute
    $value = \Carbon\Carbon::now()->format('H:i');

    if ($attributes->has('value')) {
        $value = \Carbon\Carbon::parse($attributes->get('value'))->format('H:i');
    }
@endphp
<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
        <x-dashboard.form.input.input class="flatpickr-input" id="{{ $id ?? $name }}" name="{{ $name ?? $id }}" :placeholder="$placeholder ?? $title" :value="$value" {{ $attributes }} />
        </x-input-group>
</div>

<script>
    document.querySelector('#{{ $id ?? $name }}').flatpickr({
        enableTime: true,
        noCalendar: true,
        time_24hr: true
    });
</script>
