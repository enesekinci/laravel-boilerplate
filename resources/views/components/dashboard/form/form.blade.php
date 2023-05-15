@php
    $formId = $id ?? 'form_' . rand(1000, PHP_INT_MAX);
@endphp
<form method="{{ $method }}" action="{{ $action }}" {{ isset($file) && $file ? 'enctype="multipart/form-data"' : null }} {{ $formId }} {{ $attributes }}>
    @csrf
    @if ($method == 'PUT')
        @method('PUT')
    @endif
    {{ $slot }}

</form>
<script>
    function sendForm() {
        const form = document.getElementById('{{ $formId }}');
    }
</script>
