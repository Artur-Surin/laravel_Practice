@extends('layouts.main-layout')

@section('title')
    Просмотр тура - {{ $tour->title }}
@endsection

@section('content')
    <div class="container">
        <h1>Show Tour</h1>
        <div class="card">
            <div class="card-header">
                <h2>{{ $tour->title }}</h2>
            </div>
            <div class="card-body">
                <p>{{ $tour->description }}</p>
                <p>Price: {{ $tour->price }}</p>
                <p>Start Date: {{ $tour->start_date }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('tours.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
