@extends('template')
@section('main')
    <h1>Ini view laravel</h1>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            {{-- <h1>Perulangan dengan blade</h1> --}}
            <img src="{{ asset('img/photo-157.jpeg') }}" alt="" width="250px">
        @endif
    @endfor
@endsection
