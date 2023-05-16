@php
    $type = $type ?? 'all';
    if ($type == 'all') {
        $accept = '*';
    } elseif ($type == 'image') {
        $accept = 'image/*';
    } elseif ($type == 'video') {
        $accept = 'video/*';
    } elseif ($type == 'audio') {
        $accept = 'audio/*';
    } elseif ($type == 'pdf') {
        $accept = '.pdf';
    } elseif ($type == 'word') {
        $accept = '.doc,.docx';
    } elseif ($type == 'excel') {
        $accept = '.xls,.xlsx';
    } elseif ($type == 'powerpoint') {
        $accept = '.ppt,.pptx';
    } elseif ($type == 'zip') {
        $accept = '.zip';
    } elseif ($type == 'rar') {
        $accept = '.rar';
    } elseif ($type == 'csv') {
        $accept = '.csv';
    } elseif ($type == 'text') {
        $accept = '.txt';
    } elseif ($type == 'video') {
        $accept = 'video/*';
    }

@endphp
<div class="{{ $col ?? 'col-md-6' }} {{ $rowClass ?? null }}">
    <x-dashboard.form.input.group>
        <x-dashboard.form.input.label for="{{ $id ?? $name }}" title="{{ $title }}" />
        <x-dashboard.form.input.input type="file" id="{{ $id ?? $name }}" :name="$name ?? $id" :placeholder="$placeholder ?? $title" acccept="{{ $accept }}" {{ $attributes }} />
        </x-input-group>
</div>
