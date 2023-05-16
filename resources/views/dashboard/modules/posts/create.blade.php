@extends('components.layouts.dashboard')
@section('content')
    <x-page-content-box>
        <div class="d-flex justify-content-end">
            <a href="{{ route('posts.index') }}" class="btn btn-outline-warning btn-shadow">Listeye Dön</a>
        </div>
    </x-page-content-box>
    <x-page-content-box :title="$title" :description="$description">
        <x-dashboard.form.form method="POST" action="{{ route('posts.store') }}" file="true" class="form-horizontal" id="createForm">
            <div class="row">

                <x-dashboard.form.input.text id="name" title="İsim" />

                <x-dashboard.form.input.email id="email" title="E-posta" />

                <x-dashboard.form.input.password id="password" title="Parola" />

                <x-dashboard.form.input.textarea id="description" title="Açıklama" />

                <x-dashboard.form.input.selectbox select2="true" id="post_id" title="Eski İçerikler" :options="$posts" option="title" required />

                <x-dashboard.form.input.radio-status col="col-6" id="is_active" name="is_active" title="Durum" aTitle="Aktif" dTitle="Pasif" />

                <x-dashboard.form.input.radio-status col="col-6" id="is_published" name="is_published" title="Yayın Durumu" a_title="Aktif" d_title="Pasif" />

                <x-dashboard.form.input.file type="image" id="image" title="Resim" type="image" />

                <x-dashboard.form.input.ckeditor id="content" title="İçerik" />

            </div>
            <div class="row justify-content-center align-items-center g-2">
                <hr>
            </div>
            <div class="row">
                <div class="col-6">
                    <x-dashboard.form.action-button color="outline-success" type="submit" title="Kaydet" />
                    <x-dashboard.button.action-link color="outline-danger" :url="route('posts.index')" title="Listeye Dön" />
                </div>
            </div>
        </x-dashboard.form.form>
    </x-page-content-box>
@endsection
@section('js')
    <script src="/theme/dashboard/assets/js/plugins/choices.min.js"></script>
    <script></script>
@endsection
