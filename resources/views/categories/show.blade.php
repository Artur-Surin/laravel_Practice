@extends('layouts.main-layout')

@section('title')
    Просмотр category - {{ $category->title }}
@endsection

@section('content')
    <div class="container">
        <h1>Show category</h1>
        <div class="card">
            <div class="card-header">
                <h2>{{ $category->title }}</h2>
            </div>
            <div class="card-content">
                @foreach($category->products as $product)
                   <a href="{{ route('products.show', ['product' => $product]) }}">  <p>{{ $product->name }}</p> </a>
                @endforeach
            </div>
            <div class="card-footer">
                <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
