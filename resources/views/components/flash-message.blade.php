@props(['status' => 'info'])
@php
    if ($status === 'info') {
        $bgColor = 'bg-blue-300';
    }
    if ($status === 'error') {
        $bgColor = 'bg-red-500';
    }
@endphp
@if (session('message'))
    <div class="{{ $bgColor }} m-6 mx-auto p-2 text-white rounded-md shadow-sm">
        {{ session('message') }}
    </div>
@endif
