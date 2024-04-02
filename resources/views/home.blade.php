@include('shared/header')
@include('shared/slider')
<div class="container">
    <h1 class="page-title">{{ config('app.name') }} - Buy used cars near you</h1>
    <h2 class="text-center home-summary">Shop used cars at all our participating dealers, research and compare makes, models, prices.</h2>
    <div class="row">
        @foreach ($carList as $car)
            <div class="col-md-3">
                @include('shared/item-grid', ['car' => $car])
            </div>
        @endforeach
    </div>
    <hr>
    @include('shared/brand-carousel')
</div>
@include('shared/footer')
