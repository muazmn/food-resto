@extends('layouts.main')

@section('container')
<header class="site-header site-menu-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 mx-auto">
                <h1 class="text-white">All Menus</h1>

                <strong class="text-white">Perfect for all Breakfast, Lunch and Dinner</strong>
            </div>

        </div>
    </div>

    <div class="overlay"></div>
</header>

<section class="menu section-padding">
    <div class="container">
        <div class="row">

            @foreach ($menus as $menu)

            <div class="col-lg-4 col-md-6 col-12">
                <div class="menu-thumb">
                    <img src="images/breakfast/{{ $menu->image }}" class="img-fluid menu-image" alt="">

                    <div class="menu-info d-flex">
                        <h4 class="mb-0">{{ $menu->name }}</h4>

                        <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>{{ $menu->price }}</span>


                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center pagination-lg mt-5" style="width: 100%">
            {{ $menus->links() }}

        </div>
    </div>
</section>

@endsection