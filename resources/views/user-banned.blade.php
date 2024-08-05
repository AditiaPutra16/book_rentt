@extends('layouts.mainlayouts')

@section('title', 'Banned Users')

@section('content')
<<<<<<< HEAD
    <h1>Banned User List</h1>

    <div class="my-5">
=======
    <h1>
       Banned User List
    </h1>

    <div class="mt-5">
>>>>>>> d5c2d4655458f07917911f5768251e0eb24e9c83
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif
    </div>

<<<<<<< HEAD
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($bannedUsers as $item )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->username }}</td>
                    <td>
                        @if ($item->phone)
                        {{ $item->phone }}
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="/user-restore/{{$item->slug}}">restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
@endsection
=======
    <div class="my-5">
    <table class="table">
        <thead>
            <th>No.</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Action</th>
         </tr> 
        </thead>
        <tbody>
            @foreach ($bannedUsers as $item)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $item->username }} </td>
                <td>
                    @if ($item->phone)
                        {{ $item->phone }}
                    @else
                    -
                    @endif
                </td>
                <td>
                    <a href="/user-detail/{{$item->slug}}">detail</a>
                    <a href="/user-ban/{{$item->slug}}">ban user</a>
                </td>
            </tr>
            @endforeach
        </tbody>
@endsection
>>>>>>> d5c2d4655458f07917911f5768251e0eb24e9c83
