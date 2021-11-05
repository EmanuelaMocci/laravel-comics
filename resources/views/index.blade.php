@extends('layout.base')

@section('pageContent')
    {{-- codice main --}}
    <section>
        <div class="hero">
            <img src="{{asset('laravel-comics/images/jumbotron.jpg')}}" alt="">
        </div>
    </section>
    
    

    <section class="immagini-container">
        <h2 class="current-series">
            CURRENT SERIES
        </h2>
        <div class="container">
            <ul>
                @foreach ($immagini as $immagine)
                    <li>
                        <img src="{{$immagine["thumb"]}}" alt="">
                        <h4>{{$immagine["series"]}}</h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="btn">
            <button>LOAD MORE</button>
        </div>
    </section>
@endsection