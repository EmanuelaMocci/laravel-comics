@extends('layout.base')

@section('pageContent')
    {{-- codice main --}}
    <section>
        <div class="hero">
            <img src="{{asset('laravel-comics/images/jumbotron.jpg')}}" alt="">
        </div>
    </section>
    
    <section>
        <div class="container">
            <ul>
                @foreach ($immagini as $immagine)
                    <li>
                        <img src="{{$immagine["thumb"]}}" alt="">
                        <h3>{{$immagine["series"]}}</h3>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection