<div class="container-fluid">
    <div class="row mt-2 mx-4">
        <div class="col-3 d-none d-sm-block">
            <a href="/"><img src="{{ asset('img/logo.png') }}" alt="website logo" style="width: 250px"></a>
        </div>
        {{--    for small devices    --}}
        <div class="col d-block d-sm-none text-center">
            <a href="/" class=""><img src="{{ asset('img/logo.png') }}" alt="website logo" style="width: 250px"></a>
        </div>
        <div class="col d-none d-sm-block">
            <div class="float-end">
                <a href="{{ route('about') }}" class="btn btn-outline-light rounded-0 border-2 shadow-pop-tr">About Me</a>
                <a href="{{ route('work') }}" class="btn btn-outline-light rounded-0 border-2 mx-3 shadow-pop-tr">My Work</a>
                <a href="#" class="btn btn-outline-light rounded-0 border-2 shadow-pop-tr">CV <i class="bi bi-download"></i></a>
            </div>
        </div>
    </div>
{{--  for small devices  --}}
    <div class="row mt-3 d-block d-sm-none">
        <div class="col text-center">
            <a href="{{ route('about') }}" class="btn btn-outline-light rounded-0 border-2">About Me</a>
            <a href="{{ route('work') }}" class="btn btn-outline-light rounded-0 border-2">My Work</a>
            <a href="#" class="btn btn-outline-light rounded-0 border-2">CV <i class="bi bi-download"></i></a>
        </div>
    </div>
</div>
