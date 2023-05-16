@php
    $value = $attributes->get('value');

    if ($attributes->has('value')) {
        $value = \Carbon\Carbon::parse($attributes->get('value'))->format('Y-m-d\TH:i');
    } else {
        $value = \Carbon\Carbon::now()->format('Y-m-d\TH:i');
    }
@endphp
<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
        <x-dashboard.form.input.input type="datetime-local" id="{{ $id ?? $name }}" name="{{ $name ?? $id }}" :placeholder="$placeholder ?? $title" :value="$value" {{ $attributes }} />
        </x-input-group>
</div>
<script>
    const dateTime = new Datepicker(document.querySelector('#{{ $id ?? $name }}'), {
        buttonClass: 'btn'
    });
</script>
