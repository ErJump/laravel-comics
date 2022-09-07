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
                    {{-- <div v-for="(element, index) in productsList" :key="index" class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" :src="`/img/${element.img}`" :alt="element.name">
                        <h5 class="text-uppercase text-white ms-2 fs-6">{{element.name}}</h5>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection