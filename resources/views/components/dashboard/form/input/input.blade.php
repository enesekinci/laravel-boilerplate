<input type="{{ $type ?? 'text' }}" class="{{ $type != 'checkbox' ? 'form-control' : null }} {{ $class ?? null }}" id="{{ $id ?? $name }}" name="{{ $name ?? $id }}"
    placeholder="{{ $placeholder ?? null }}" {{ $attributes }}>
