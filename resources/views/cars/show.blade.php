@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-6 col-lg-4">
            <h2>{{ $car->title }}</h2>
            <p>This car is manufactured by {{ $car->producer }} and it has {{ $car->number_of_doors }} </p>
        </div><!--/span-->
    </div><!--/row-->

@endsection