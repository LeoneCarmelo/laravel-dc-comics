@extends('layout.app')

@section('content') 
<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-3 position-relative">
    <div class="series text-uppercase text-white px-2 py-1 fw-bold fs-5">current series</div>
        @foreach ($comics as $comic)
        <div class="col">
            <a class="card_thumb" href="">
                <img src='{{$comic["thumb"]}}' alt="" class="card-img-top">
            </a>
            <span class="text-white">{{ $comic["series"] }}</span>
        </div>
          @endforeach
    </div>
    <button class="text-white text-uppercase mt-5 px-5 py-2 fw-bold">Load More</button>
</div>
@endsection