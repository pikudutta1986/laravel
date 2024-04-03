<div class="item-grid">
    <div class="images">
        <div class="owl-carousel car-carousel owl-theme">
            @if ($car->images != "")
                @foreach(explode('|', $car->images) as $image) 
                <div class="item">
                    <a href="/car/{{$car->vin}}"><img src="{{$image}}" /></a>
                </div>
                @endforeach
            @endif
        </div>
        <div class="price">${{number_format($car->price)}}</div>
    </div>
    <div class="content">
        <h2><a href="/car/{{$car->vin}}">{{$car->year}} {{$car->make}} {{$car->model}}</a></h2>
        <p><img class="feature-icon" src="/images/engine.svg" /> {{$car->engine}}</p>
        <p><img class="feature-icon" src="/images/fueltype.svg" /> {{$car->fueltype}}</p>
        <p><img class="feature-icon" src="/images/transmission.svg" /> {{($car->transmission) ? $car->transmission : 'Not available'}}</p>
        <p><img class="feature-icon" src="/images/distancemeter.svg" /> {{$car->mileage}} K.M.</p>
    </div>
</div>