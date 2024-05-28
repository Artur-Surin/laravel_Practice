@extends('layouts.main-layout')

@section('content')
    <div class="container mt-4">
        <h1>{{ $product->name }}</h1>
        <a href="{{ route('products.edit', $product->id) }}">
            <button class="btn btn-primary">Редактировать</button>
        </a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад к таблице</a>
        <div class="mt-4">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">{{ $product->id }}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Название</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Описание</th>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <th scope="row">Цена</th>
                    <td>{{ $product->price }}</td>
                </tr>
                <tr>
                    <th scope="row">Категория</th>
                    <td>
                        <a href="{{ route('categories.show', ['category' => $product->category]) }}">
                            {{ $product->category->title }}
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection


