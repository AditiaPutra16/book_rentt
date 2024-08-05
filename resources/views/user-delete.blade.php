@extends('layouts.mainlayouts')

@section('title', 'Delete User')

@section('content')

<<<<<<< HEAD
    <h2>Are you sure to delete user {{$user->username}} ?</h2>
    <div class="mt-5">
        <a href="/user-destroy/{{$user->slug}}" class="btn btn-danger me-3">Sure</a>
        <a href="/users" class="btn btn-primary">Cancel</a>
    </div>

@endsection
=======
    <h2>are you sure to delete user {{$user->username}}</h2>
    <div class="mt-5">
        <a href="/user-destroy/{{$user->slug}}" class="btn btn-danger me-3">Sure</a>
        <a href="/user" class="btn btn-primary">Cancel</a>
    </div>

@endsection
>>>>>>> d5c2d4655458f07917911f5768251e0eb24e9c83
