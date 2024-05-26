@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1>Tours</h1>
        <a href="{{ route('tours.create') }}" class="btn btn-primary">Create Tour</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Start Date</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($tours as $tour)
                <tr>
                    <td>{{ $tour->id }}</td>
                    <td>{{ $tour->title }}</td>
                    <td>{{ $tour->description }}</td>
                    <td>{{ $tour->price }}</td>
                    <td>{{ $tour->start_date }}</td>
                    <td>
                        <form action="{{ route('tours.destroy', $tour->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('tours.show', $tour->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('tours.edit', $tour->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
