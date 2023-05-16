<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
        <x-dashboard.form.input.input class="telephone" :data-mask="$dataMask ?? '(999) 999-9999'" type="url" id="{{ $id ?? $name }}" :placeholder="$placeholder ?? $title" {{ $attributes }} />
    </x-dashboard.form.input.group>
</div>
<script></script>
