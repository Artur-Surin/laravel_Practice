@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div>
        <h1>Добавление товара</h1>
    </div>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product-name" class="form-label">Название</label>
            <input type="text" class="form-control" id="product-name" placeholder="50" name="name">
        </div>
        <div class="mb-3">
            <label for="product-description" class="form-label">Описание</label>
            <textarea class="form-control" id="product-description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="product-price" class="form-label">Цена</label>
            <input type="number" class="form-control" id="product-price" placeholder="100" name="price">
            @error('price')
                {{ $message }}
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
</div>
@endsection
