@php
    
@endphp
<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
        <select class="form-control {{ $css ?? null }}" id="{{ $id ?? $name }}" name="{{ $id ?? $name }}" {{ isset($select2) ? 'data-trigger' : null }} {{ $attributes }}>
            @if ($attributes->has('debug'))
                {{ dd($options) }}
            @endif
            @foreach ($options as $item)
                <option value="{{ $item->{$value} }}">{{ $item->{$option} }}</option>
            @endforeach
        </select>
        </x-input-group>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const select2 = new Choices(document.getElementById('{{ $id ?? $name }}'), {
            placeholderValue: 'This is a placeholder set in the config',
            searchPlaceholderValue: 'This is a search placeholder',
            itemSelectText: 'Press to select',
        });

        // .choices__input choices__input--cloned text color set white
        var choicesInput = document.querySelectorAll('.choices__input');
        for (i = 0; i < choicesInput.length; ++i) {
            const element = choicesInput[i];
            let color = 'text-dark';
            if (localStorage.getItem('dark_layout') == 'true') {
                color = 'text-white';
            }
            element.classList.add(color);
        }

    });
</script>
