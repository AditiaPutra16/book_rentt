@extends('layouts.mainlayouts')

@section('title', 'Rent Log')

@section('content')
    <h1>Rent Log List</h1>

    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Book</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Actual Return Date</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
