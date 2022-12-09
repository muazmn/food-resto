@extends('layouts.main2')

@section('container')
{{-- <div class="w-100 d-flex justify-content-center mt-5">
    <span class="d-block w-75 d-flex justify-content-end">
        <p><a type="button" class="btn btn-warning " href="category/create">New Category</a>
    </span>
</div>
<div class="d-flex justify-content-center">
    @if(Session::has('success'))
    <div class="alert alert-success w-75 d-flex justify-content-center">
        {{Session::get('success')}}
    </div>

</div>
@endif
<div class="w-100 d-flex justify-content-center mb-5">
    <table class="table table-striped w-75">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <th>{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                ////// <td><img src="{{ Storage::url($category->image) }}" alt="{{ $category->image }}"></td>
                <td colspan="2">{{ $category->description }}</td>
                <td colspan="2">
                    <a href="/category/{{ $category->id }}/edit" class="badge bg-warning">edit<span
                            data-fether="edit"></span></a>
                    <form action="/category/{{ $category->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                data-fether="x-circle">delete</span></button>
                    </form>
                </td>
            </tr>
            <img src="{{ Storage::url($category->image) }}" alt="">/////
            @endforeach
        </tbody>
    </table>

</div> --}}

<header class="site-header site-menu-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 mx-auto">
                <h1 class="text-white">Our {{ $category->name }}</h1>

                <strong class="text-white">Perfect for all</strong>
            </div>

        </div>
    </div>

    <div class="overlay"></div>
</header>

<section class="menu section-padding">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="mb-lg-5 mb-4">{{ $category->name }} Section</h2>
            </div>
            @foreach($category->menus as $menu)

            <div class="col-lg-4 col-md-6 col-12">
                <div class="menu-thumb">
                    <img src="../images/breakfast/{{ $menu->image }}" class="img-fluid menu-image" alt="">

                    <div class="menu-info d-flex align-items-center">
                        <h5 class="mb-0">{{ $menu->name }}</h5>

                        <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>{{ $menu->price }}</span>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>

</div>

@endsection
{{-- <section class="menu section-padding">
    <div class="container">
        <div class="row">
            @foreach($category->menus as $menu)
            <div class="col-12">
                <h4 class="">{{ $menu->name }}</h4>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="menu-thumb">
                    <img src="../images/breakfast/{{ $menu->image }}" class="img-fluid menu-image" alt="">

                    <div class="menu-info d-flex flex-wrap align-items-center">
                        <h4 class="mb-0">Fresh Start</h4>

                        <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>{{ $menu->price }}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section> --}}