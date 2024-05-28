@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <div>
            <h1>Редактирование вида товара: {{ $product->name }}</h1>
        </div>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="product-name" class="form-label">Название</label>
                <input type="text" class="form-control" id="product-name" name="name" value="{{ $product->name }}">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product-description" class="form-label">Описание</label>
                <textarea class="form-control" id="product-description" name="description">{{ $product->description }}</textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product-price" class="form-label">Цена</label>
                <input type="number" class="form-control" id="product-price" name="price" value="{{ $product->price }}">
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product-category" class="form-label">Описание</label>
                <select class="form-control" id="product-category" name="category_id">
                    @foreach($product->categories() as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                @error('category')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
