@extends('layout.app')

@section('title', 'Packages')

@section('main_content')
    <div class="container">
        @foreach($packages as $package)
        <div class="travel_pack">
            <img src="{{$package->image_url}}" alt="" class="city">
            <div class="details">
                <h2 class="destination">{{$package->destination}}</h2>
                <h3 class="hotel">{{$package->hotel}}</h3>
                <p class="description">{{$package->description}}</p>
                <div class="days-price_ratio">
                    <span class="duration">{{$package->duration}}</span>
                    <span class="price">{{$package->price}} &euro;</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
