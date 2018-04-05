@extends('layouts.default')


@section('content')

    @foreach($cars as $car)
        <div class="row">
            <div class="col-6 col-lg-6">
                <h2>{{ $car->title }}</h2>
                <p>This car is manufactured by {{ $car->producer }}. </p>
                <p><a class="btn btn-secondary" href="{{ route('singe-car',['id' => $car->id]) }}" role="button">View
                        details &raquo;</a></p>
            </div><!--/span-->
            @endforeach
        </div><!--/row-->

@endsection