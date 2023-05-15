@php
    $id = $id ?? $name;
    $name = $name ?? $id;

    $deactiveChecked = 'checked';
    $activeChecked = null;

    if (isset($value) && $value == 1) {
        $activeChecked = 'checked';
        $deactiveChecked = null;
    }
@endphp
<div class="{{ $col ?? 'row' }} mb-3 {{ $rowClass ?? null }}">
    <div class="col-form-label col-sm-3 pt-0">{{ $title }}</div>
    <div class="col-sm-6">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="{{ $name }}" id="{{ $id }}_0" value="0" {{ $deactiveChecked }}>
            <label class="form-check-label" for="{{ $id }}_0"> {{ $dTitle ?? '-' }} </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="{{ $name }}" id="{{ $id }}_1" value="1" {{ $activeChecked }}>
            <label class="form-check-label" for="{{ $id }}_1"> {{ $aTitle ?? '-' }} </label>
        </div>
    </div>
</div>
