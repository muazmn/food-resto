@extends('layouts.main')


@section('container')
@if(Session::has('success'))
<div class="d-flex justify-content-center">
    <div class="alert alert-success w-75 d-flex justify-content-center">
        {{Session::get('success')}}
    </div>

</div>
@endif
<div class="justify-content-center">

    <div class="w-100 justify-content-center mt-3 d-flex">
        <span class=" w-75 d-flex justify-content-end" style="max-width: 700px">
            <p><a type="button" class="btn btn-warning " href="reservation/create">New reserve</a>
        </span>
    </div>
    <div class="w-100 d-flex justify-content-center">
        <table class="table table-striped w-75" style="max-width: 700px">
            <thead>
                <tr>
                    <th scope=" col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Table</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                    <td>{{ $reservation->res_date }}</td>
                    <td>{{ $reservation->table->name }}</td>
                    <td colspan="2">
                        <a href="/reservation/{{ $reservation->id }}/edit" class="badge bg-warning"
                            style="min-width: 55px">edit<span data-fether=" edit"></span></a>
                        <form action="/reservation/{{ $reservation->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" style=""
                                onclick="return confirm('Are you sure?')"><span
                                    data-fether="x-circle">delete</span></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>


    @endsection