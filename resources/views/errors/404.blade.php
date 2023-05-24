@extends('index')

@section('title', '404 Page Not Found')

@section('content')
    <header>
        @include('home.header')
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="float-lg-end ">
                        <div class="text-center">
                            <h2><b>404</b></h2>
                            <p><i>"Oh hi, Mark..."</i></p>
                            <p>No page found.</p>
                            <a href="/" class="btn btn-outline-light rounded-0 border-2 shadow-pop-tr">Go back Home</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('img/404.gif') }}" alt="404 page not found gif" style="width: 500px" class="float-start mt-3">
                </div>
            </div>
        </div>
    </main>

@endsection
