<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
        <x-dashboard.form.input.input type="color" class="form-control-color" id="{{ $id ?? $name }}" :placeholder="$placeholder ?? $title" :value="$value ?? '#563d7c'" {{ $attributes }} />
    </x-dashboard.form.input.group>
</div>
<script></script>
