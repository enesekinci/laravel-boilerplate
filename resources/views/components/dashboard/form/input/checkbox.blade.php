<div class="{{ $col ?? 'col-12' }} py-3 {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group class="form-check">
        <x-dashboard.form.input.input class="form-check-input" type="checkbox" id="{{ $id }}" placeholder="{{ $title }}" value="{{ $value ?? 1 }}" {{ $attributes }} />
        <x-dashboard.form.input.label for="{{ $id }}" title="{{ $title }}" />
        </x-input-group>
</div>
