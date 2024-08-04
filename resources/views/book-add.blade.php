@extends('layouts.mainlayouts')

@section('title', 'Add Book')

@section('content')

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
                <input type="text" name="book_code" id="code" class="form-control" 
                placeholder="Book's Code" value="">
            </div>

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" id="code" class="form-control" 
              placeholder="Book's title" value="{{ old('username') }}">
          </div>

          <div>
            <label for="Image" class="form-label">Image</label>
            <input type="file" name="Image" class="form-control">
        </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection