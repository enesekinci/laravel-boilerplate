@extends('components.layouts.dashboard')
@section('content')
    <x-page-content-box>
        <div class="d-flex justify-content-end">
            <a href="{{ route('posts.create') }}" class="btn btn-outline-success btn-shadow">Yeni Ekle</a>
        </div>
    </x-page-content-box>
    <x-page-content-box :title="$title" :description="$description">
        <x-dashboard.table.table :pagination="true" :columns="$tableColumns" :data="$posts">
        </x-dashboard.table.table>
    </x-page-content-box>
@endsection
@section('js')
@endsection
