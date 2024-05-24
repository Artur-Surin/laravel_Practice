@extends('layouts.main-layout')

@section('content')
    <div class="container mt-4">
        <h1>Виды трансфера</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Добавить вид товара</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('products.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border:none; background:none; color: red; padding: 0;"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
