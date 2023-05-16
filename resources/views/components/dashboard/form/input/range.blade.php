<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
        <x-dashboard.form.input.input id="{{ $id ?? $name }}" data-slider-id="{{ $id ?? $name }}" :placeholder="$placeholder ?? $title" data-slider-min="{{ $min }}" data-slider-max="{{ $max }}"
            data-slider-step="{{ $step ?? 1 }}" data-slider-value="{{ $value ?? 0 }}" {{ $attributes }} />
    </x-dashboard.form.input.group>
</div>
<script></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('#{{ $id ?? $name }}').slider({
            tooltip: 'always'
        });
    });
</script>
