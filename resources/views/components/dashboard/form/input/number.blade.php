<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
        <x-dashboard.form.input.input type="number" :step="$step ?? 1" :min="$min ?? 0" :max="$max ?? PHP_INT_MAX" id="{{ $id ?? $name }}" :placeholder="$placeholder ?? $title" {{ $attributes }} />
    </x-dashboard.form.input.group>
</div>
