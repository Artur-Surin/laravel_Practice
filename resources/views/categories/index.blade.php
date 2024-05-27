@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1>categories</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Create category</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('categories.show', $category->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
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

