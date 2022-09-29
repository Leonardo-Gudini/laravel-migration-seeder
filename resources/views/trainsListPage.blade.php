<h1>Lista dei Treni</h1>

@foreach ($trains as $train)
    <div>
        <h1>{{$train->company}}</h1>
        <h1>{{$train->departure_station}}</h1>
        <h1>{{$train->arrival_station}}</h1>
    </div>
@endforeach