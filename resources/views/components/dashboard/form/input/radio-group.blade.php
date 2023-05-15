<div class="{{ $col ?? 'row' }} mb-3 {{ $rowClass ?? null }}">
    <div class="col-form-label col-sm-3 pt-0">{{ $title }}</div>
    <div class="col-sm-9">
        @foreach ($options as $index => $option)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $name ?? $id }}" id="{{ $id ?? $name }}" value="{{ $option['value'] }}" {{ $attributes }}>
                <label class="form-check-label" for="{{ $id ?? $name }}"> {{ $option['title'] }} </label>
            </div>
        @endforeach
    </div>
</div>
