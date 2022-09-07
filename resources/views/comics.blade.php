@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <div class="bg-main">
        <div>
            <div class="jumbotron"></div>
            <div class="container-lg position-relative py-5">
                <div class="text-uppercase text-white my_title position-absolute">
                Current series
                </div>
                <div class="row mt-4">
                    @forelse ($comics as $comic)
                        <div class="col-2 comic-card mb-4">
                            <img class="img-fluid mb-3" src="{{$comic->image}}" alt="{{$comic->title}}">
                            <h6 class="text-uppercase text-white">{{$comic->title}}</h6>
                        </div>
                    @empty
                        {{'Non ci sono fumetti disponibili'}}
                    @endforelse 
                </div>
                <div class="d-flex justify-content-center">
                    <div class="text-uppercase text-white my_button">
                        Load More
                    </div>
                </div>
            </div>
            </div>
            <div class="bg-sec py-5">
            <div class="container-lg">
                <div class="row justify-content-around">
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" src="images/buy-comics-digital-comics.png" alt="digital">
                        <h5 class="text-uppercase text-white ms-2 fs-6">Digital Comics</h5>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" src="images/buy-comics-merchandise.png" alt="merch">
                        <h5 class="text-uppercase text-white ms-2 fs-6">DC Merchandise</h5>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" src="images/buy-comics-subscriptions.png" alt="subscriptions">
                        <h5 class="text-uppercase text-white ms-2 fs-6">Subscriptions</h5>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" src="images/buy-comics-shop-locator.png" alt="Comic Shop Locator">
                        <h5 class="text-uppercase text-white ms-2 fs-6">Comic Shop Locator</h5>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" src="images/buy-dc-power-visa.svg" alt="DC Power Visa">
                        <h5 class="text-uppercase text-white ms-2 fs-6">DC Power Visa</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection