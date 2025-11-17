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
                <x-card>
                    <x-slot:thumb>{{ $comic["thumb"] }}</x-slot:thumb>
                    <x-slot:series>{{ $comic["series"] }}</x-slot:series>
                </x-card>
            @endforeach
        </div>
    </div>
</div>
@endsection
