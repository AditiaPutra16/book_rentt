@extends('layouts.mainlayouts')

@section('title', 'Banned Users')

@section('content')
    <h1>Banned User List</h1>

    <div class="my-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif
    </div>

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
