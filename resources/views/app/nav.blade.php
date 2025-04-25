@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Available Cars</h1>
        <div class="row">
            @foreach($cars as $car)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->make }} {{ $car->model }}</h5>
                            <p class="card-text">Year: {{ $car->year }}</p>
                            <p class="card-text">Price per day: ${{ $car->price_per_day }}</p>
                            <a href="{{ route('cars.show', $car->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
