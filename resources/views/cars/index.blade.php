<ul>
@foreach($cars as $car)

    <li><a href="{{ route('singe-car',['id' => $car->id]) }}">{{ $car->title }}</a> </li>


    @endforeach
</ul>