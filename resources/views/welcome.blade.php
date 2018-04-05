@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-6 col-lg-4">
            <h2>Welcome</h2>
            <p>Welcome {{ $name}}, I am {{ $age}} of age. </p>
        </div><!--/span-->
    </div><!--/row--
    @endsection