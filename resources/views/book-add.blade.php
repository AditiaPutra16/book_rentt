@extends('layouts.mainlayouts')

@section('title', 'Users')

@section('content')
    <h1>
       User List
    </h1>

<<<<<<< HEAD
    <div class="mt-5 d-flex justify-content-end">
        <a href="#" class="btn btn-primary me-3">View Banned User </a>
        <a href="/registed-users" class="btn btn-secondary">New Registered User</a>
    </div>

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
            @foreach ($users as $item)
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
                    <a href="#">detail</a>
                    <a href="#">ban user</a>
                </td>
            </tr>
            @endforeach
        </tbody>
@endsection
=======
    <h1>Add New Book</h1>

    <div class="mt-5 w-50">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="book-add" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="code" class="form-label">Code</label>

                <input type="text" name="book_code" id="code" class="form-control" placeholder="Book's Code" value="{{old('book_code')}}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Book's title" value="{{old('title')}}">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>


@endsection
>>>>>>> 257d765d0e0ae22662c9207727a31e1309234c92
