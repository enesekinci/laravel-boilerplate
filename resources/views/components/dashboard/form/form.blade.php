@php
    $id = $id ?? 'form_' . rand(1000, PHP_INT_MAX);
@endphp
<form method="{{ $method }}" action="{{ $action }}" {{ isset($file) && $file ? 'enctype="multipart/form-data"' : null }} id="{{ $id }}" {{ $attributes }}
    {{ !isset($attributes->onsubmit) ? ' onsubmit=sendForm(this,event) ' : null }} required>
    @csrf
    @if ($method == 'PUT')
        @method('PUT')
    @endif
    {{ $slot }}

</form>
<script>
    function sendForm(form, event) {
        event.preventDefault();

        // eğer form içinde ckeditor varsa ckeditor içindeki veriyi form içine aktar
        ckEditorUpdate();

        const formData = new FormData(form);
        const url = form.action;
        const method = form.method;

        axios({
                method: method,
                url: url,
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                responseType: 'json'
            })
            .then(function(response) {

                if (response.data.status) {
                    success_alert(response.data.message);
                    return form.reset();
                }

                return error_alert(response.data.message);

            })
            .catch(function(error) {
                const errors = error.response.data.errors;

                const errorText = Object.values(errors).join("<br/>");

                error_alert(errorText);
            });

    }
</script>
