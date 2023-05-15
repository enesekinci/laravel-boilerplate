<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id }}" title="{{ $title }}" />
        <textarea class="form-control" id="{{ $id ?? $name }}" name="{{ $name ?? $id }}" rows="{{ $rows ?? null }}" placeholder="{{ $placeholder ?? $title }}" {{ $attributes }}>{{ $value ?? null }}</textarea>
        {{ $slot }}
        </x-input-group>
</div>
