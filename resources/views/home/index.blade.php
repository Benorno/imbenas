@extends('index')

@section('title', 'Benas Ašmontas | Web Dev')

@section('content')
    <header>
        @include('home.header')
    </header>

    <main>
        @include('home.main')
    </main>
    

{{--    @include('footer')--}}
@endsection
