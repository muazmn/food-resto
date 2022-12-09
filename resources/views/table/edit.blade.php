@extends('layouts.main3')

@section('container')
<div class="row justify-content-center mt-4 mb-4">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/table/{{ $table->id }}" method="post">
                @method('put')
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                        id="name" placeholder="name" required value="{{ $table->name }}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="number" name="guest_number"
                        class="form-control @error('username') is-invalid @enderror" id="guest_number"
                        placeholder="guest_number" required value="{{ $table->guest_number }}">
                    <label for="guest_number">Guest Number</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('username') is-invalid @enderror"
                        id="email" placeholder="email" required value="{{ old('username') }}">
                    <label for="email">Email</label>
                </div> --}}
                <div class="form-floating">
                    <select name="status" id="status" class="form-control rounded-top">
                        @foreach (App\Enums\TableStatus::cases() as $status)
                        <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>{{
                            $status->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-floating">
                    <select name="location" id="location" class="form-control rounded-top">
                        @foreach (App\Enums\TableLocation::cases() as $location)
                        <option value="{{ $location->value }}" @selected($table->location->value == $location->value)>{{
                            $location->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- <div class="form-floating">
                    <input type="password" name="password"
                        class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                        placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> --}}
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection