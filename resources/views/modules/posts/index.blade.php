@extends('components.layouts.dashboard-layout')
@section('content')
    <!-- Individual Column Searching (Text Inputs) start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>{{ $title }}</h5>
                <small>{{ $description }}</small>
            </div>
            <div class="card-body">
                <x-dashboard.table :pagination="true" :headers="['Başlık', 'Yazar', 'İçerik', 'Resim', 'Yayın Durumu', 'Yayın Tarihi']" :columns="['title', 'authorName', 'content', 'image', 'is_published', 'published_at']" :data="$posts"></x-dashboard.table>
                {{-- Eğer datada sayfalama varsa --}}
            </div>
        </div>
    </div>
    <!-- Individual Column Searching (Text Inputs) end -->
@endsection
@section('js')
@endsection
