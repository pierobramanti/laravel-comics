@extends('layouts.app')
@section("content")
<div class="bg-hero">
</div>
<div class="bg-dark">
<div class="pt-5">
    <div class="container">
        <div class="row">
            @foreach ($comicList as $comic)
            <div class="col-2 mx-auto">
                <div class="image-container">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="img-fluid">
                </div>
                <p class="text-uppercase mt-3 text-white">{{$comic['series']}}</p>
            </div>
            @endforeach
            
            <div class="col-12">
                <div class="d-flex justify-content-center my-4">
                    <button class="btn btn-sm btn-primary text-uppercase fw-bolder text-white rounded-0 px-4 py-2">Load More</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
