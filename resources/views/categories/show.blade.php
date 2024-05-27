@extends('layouts.main-layout')

@section('title')
    Просмотр тура - {{ $category->title }}
@endsection

@section('content')
    <div class="container">
        <h1>Show category</h1>
        <div class="card">
            <div class="card-header">
                <h2>{{ $category->title }}</h2>
            </div>
            <div class="card-footer">
                <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
