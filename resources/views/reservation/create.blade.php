@extends('layouts.main')

@section('container')
<div class="row mt-4 mb-4 justify-content-center">
    <main class="form-registration test">
        <h1 class="h3 mb-3 fw-normal text-center">reservation Form</h1>
        <form action="{{ route('reservation.store') }}" method="post">
            @csrf
            <div class="form-floating">
                <input type="text" name="first_name"
                    class="form-control rounded-top @error('first_name') is-invalid @enderror" id="first_name"
                    placeholder="first_name" required value>
                <label for="first_name">First Name</label>
                @error('first_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="last_name"
                    class="form-control rounded-top @error('last_name') is-invalid @enderror" id="last_name"
                    placeholder="last_name">
                <label for="last_name">Last Name</label>
                @error('last_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror"
                    id="email" placeholder="email" required>
                <label for="email">Email</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="number" name="tel_number"
                    class="form-control rounded-top @error('tel_number') is-invalid @enderror" id="tel_number"
                    placeholder="tel_number" required>
                <label for="tel_number">Phone Number</label>
                @error('tel_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="datetime-local" name="res_date"
                    class="form-control rounded-top @error('res_date') is-invalid @enderror" id="res_date"
                    placeholder="res_date" required>
                <label for="res_date">Reservation Date</label>
                @error('res_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="number" name="guest_number"
                    class="form-control rounded-top @error('guest_number') is-invalid @enderror" id="guest_number"
                    placeholder="guest_number" required>
                <label for="guest_number">Guest Number</label>
                @error('guest_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            {{-- <div class=""> --}}
                {{-- </div> --}}
            <div class="form-floating">
                <select name="table_id" id="table_id" class="form-control rounded-top">
                    @foreach ($tables as $table)
                    <option value="{{ $table->id }}" @selected($table->id == 7)
                        >{{ $table->name }}
                        ({{ $table->guest_number }} Guest)</option>
                    @endforeach

                </select>
                <label for="res_date">Table</label>
                @if(Session::has('warning'))
                <div class=" alert alert-warning d-flex justify-content-center">
                    {{Session::get('warning')}}
                </div>

                @endif
                <button class="btn btn-lg btn-warning mt-3 w-100" type="submit">submit</button>
            </div>
        </form>
    </main>
</div>
</div>
@endsection