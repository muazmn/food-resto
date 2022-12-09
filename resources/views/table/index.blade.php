@extends('layouts.main')

@section('container')
<div class="w-100 d-flex justify-content-center mt-5">
    <span class="d-block w-75 d-flex justify-content-end">
        <p><a type="button" class="btn btn-warning " href="table/create">New Menu</a>
    </span>
</div>
<div class="d-flex justify-content-center">
    @if(Session::has('success'))
    <div class="alert alert-success w-75 d-flex justify-content-center">
        {{Session::get('success')}}
    </div>
    @endif
</div>
<div class="w-100 d-flex justify-content-center mb-5">
    <table class="table table-striped w-75">

        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Guest</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                <th scope="col">Action</th>
                {{-- <th scope="col"></th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($tables as $table)
            <tr>
                <th scope="row">{{ $table->id }}</th>
                <td>{{ $table->name }}</td>

                {{-- <th scope="row">2</th> --}}
                <td>{{ $table->guest_number }}</td>

                <td colspan="2">{{ $table->status }}</td>
                <td colspan="2">
                    <a href="/table/{{ $table->id }}/edit" class="badge bg-warning">edit<span
                            data-fether="edit"></span></a>
                    <form action="/table/{{ $table->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                data-fether="x-circle">delete</span></button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

</div>

@endsection