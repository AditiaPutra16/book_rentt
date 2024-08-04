@extends('layouts.mainlayouts')

@section('title', 'Dashboard')

@section('content')

    <div class="my-5">
        <div class="row">
            @foreach ($books as $item )
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card h-100">
                        <img src="{{ $item->cover != null ? asset('storage/cover/'.$items->cover) : asset ('image/cover1.jpg')}}" class="card-img-top" draggable="false">
                        <div class="card-body">
                        <h5 class="card-title">{{$items->book_code}}</h5>
                        <p class="card-text">{{$items->title}}</p>
                        <p class="card-text text-end fw-bold {{$item->status == 'in stock' ? 'text-success' : 'text-danger'}}">
                            {{$items->status}}
                        </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
