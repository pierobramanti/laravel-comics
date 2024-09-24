@extends('layouts.app')
@section("content")
<div class="bg-dark">
<div class="pt-5">
    <div class="container">
        <div class="row">
            @foreach ($comicList as $comic)
            <div class="col-2 mx-auto">
                <div>
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="img-fluid">
                </div>
                <p class="text-uppercase text-white mt-3"></p>
            </div>
            @endforeach
            
            <div class="col-12">
                <div class="d-flex justify-content-center my-4">
                    <button class="btn text-uppercase fw-bold text-white rounded-0">Load More</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
