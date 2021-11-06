@extends('layout.base')

@section('pageContent')
    {{-- codice main --}}
    <section>
        <div class="hero"></div>
    </section>

    <section class="immagini-container">
        <h2 class="current-series">
            CURRENT SERIES
        </h2>
        <div class="container">
            <ul>
                @foreach ($immagini as $immagine)
                    <li>
                        <a href="#"><img src="{{$immagine["thumb"]}}" alt="Immagine fumetto"></a>
                        <h4>{{$immagine["series"]}}</h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="btn">
            <button><a href="#">LOAD MORE</a></button>
        </div>
    </section>

    <section class="info-container">
        <div class="info">
            <div class="img-info">
                <img src="{{asset('laravel-comics/images/buy-comics-digital-comics.png')}}" alt="">
                <span>DIGITAL COMICS</span>
            </div>
            <div class="img-info">
                <img src="{{asset('laravel-comics/images/buy-comics-merchandise.png')}}" alt="">
                <span>DC MERCHANDISE</span>
            </div>
            <div class="img-info">
                <img src="{{asset('laravel-comics/images/buy-comics-shop-locator.png')}}" alt="">
                <span>SUBSCRIPTION</span>
            </div>
            <div class="img-info">
                <img src="{{asset('laravel-comics/images/buy-comics-subscriptions.png')}}" alt="">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="img-info visa">
                <img src="{{asset('laravel-comics/images/buy-dc-power-visa.svg')}}" alt="">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </section>
@endsection