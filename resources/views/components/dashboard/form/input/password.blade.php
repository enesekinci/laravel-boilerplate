<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
        <x-dashboard.form.input.input type="password" id="{{ $id ?? $name }}" name="{{ $name ?? $id }}" :placeholder="$placeholder ?? $title" {{ $attributes }} />
        <small class="text-muted d-none password-validate-message" style="color:red !important">Parolanız en az 8 karakterden oluşmalıdır.</small>
    </x-dashboard.form.input.group>
</div>
@if (isset($confirm))
    <div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
        <x-dashboard.form.input.group>
            <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
            <x-dashboard.form.input.input type="password" id="{{ $id ?? $name }}_confirmation" name="{{ $name ?? $id }}_confirmation" :placeholder="($placholder ?? $title) . ' Tekrar'" {{ $attributes }} />
            <small class="text-muted d-none password-validate-message" style="color:red !important">Parolanız en az 8 karakterden oluşmalıdır.</small>
        </x-dashboard.form.input.group>
    </div>
    <script>
        const password = document.getElementById("{{ $id ?? $name }}");
        const confirm_password = document.getElementById("{{ $id ?? $name }}_confirmation");

        function validatePassword() {
            return false;
            console.log(password.value, confirm_password.value)
            if (password.value != confirm_password.value) {
                document.querySelector('.password-validate-message').classList.remove('d-none');
                document.querySelector('.password-validate-message').innerHTML = 'Parolalar eşleşmiyor.';
            } else if (password.value.length < 8) {
                document.querySelector('.password-validate-message').classList.remove('d-none');
                document.querySelector('.password-validate-message').innerHTML = 'Parolanız en az 8 karakterden oluşmalıdır.';
            } else {
                document.querySelector('.password-validate-message').classList.add('d-none');
                document.querySelector('.password-validate-message').innerHTML = '';
            }
        }

        password.onchange = validatePassword;
        password.onkeyup = validatePassword;
        confirm_password.onkeyup = validatePassword;
        confirm_password.onchange = validatePassword;
    </script>
@endif
