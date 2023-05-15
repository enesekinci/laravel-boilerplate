<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id }}" title="{{ $title }}" />
        <x-dashboard.form.input.input type="password" id="{{ $id }}" placeholder="{{ $title }}" {{ $attributes }} />
        </x-input-group>
</div>
