@extends ("layouts/master")

@section("title")
    News
@endsection

@section("main")
    <h2>News</h2>
    <p>Qui tutte le news!</p>


    <a href="{{ route('homepage') }}" class="btn">Torna alla homepage</a>

@endsection