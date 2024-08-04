@extends('layouts.mainlayouts')

@section('title', 'Category')

@section('content')
    <h1>
        Category List
    </h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="category-add" class="btn btn-primary me-3">Add Category</a>
        <a href="category-deleted" class="btn btn-secondary">View Delete Category</a>
    </div>


<<<<<<< HEAD
=======
    <div class="my-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif
    </div>
>>>>>>> 257d765d0e0ae22662c9207727a31e1309234c92


    <div class="my-5">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="/category-edit/{{$item->slug}}">edit</a>
                            <a href="/category-delete/{{$item->slug}}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
