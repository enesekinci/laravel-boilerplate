<div class="{{ $col ?? 'col-12' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
        <textarea class="form-control ckeditor-content" id="{{ $id ?? $name }}" name="{{ $name ?? $id }}" rows="{{ $rows ?? null }}" placeholder="{{ $placeholder ?? $title }}" {{ $attributes }}>{{ $value ?? null }}</textarea>
        {{ $slot }}
        </x-input-group>
</div>
