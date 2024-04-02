@include('shared/header')
<div class="container content-container">
    <img src="/images/banner-ad.jpg" class="banner-ad-image" alt="{{ config('app.name') }}" />
    <h1 class="page-title">{{ config('app.name') }} - Find your perfect car from our inventory</h1>
    <div class="row">
        <div class="col-md-3 left-sidebar">
            @include('shared/sidebar')
        </div>
        <div class="col-md-9">
            <div class="row">
                @foreach ($carList as $car)
                    <div class="col-md-4">
                        @include('shared/item-grid', ['car' => $car])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
</div>
@include('shared/footer')