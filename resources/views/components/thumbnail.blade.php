@if (empty($filename))
    <img src="{{ asset('images/no_image.jpg') }}">
@else
    {{-- <img src="{{ asset($path . $filename) }}"> --}}
    <img src="{{ asset($filename) }}">
@endif
