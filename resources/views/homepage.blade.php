@extends ("layouts/master")

@section("title")
    Homepage
@endsection

@section("main")
<div style="background-color: #1E1E1E; padding: 2rem;">
    
    @php
        //prendiamo gli array di comics e li salviamo dentro una variabile
        $comics = config("comics");
    @endphp

    <div class="container">
        <div class="row g-3"> 
            @foreach ($comics as $comic)
                <div class="col-6 col-md-2"> 
                    <div class="card" style="background-color: #1E1E1E;">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top fixed-card-img" alt="{{ $comic['series'] }}">
                        <div class="card-body p-2">
                            <h5 class="card-title text-light text-center" style="font-size: 0.9rem;">
                                {{ $comic['series'] }}
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
