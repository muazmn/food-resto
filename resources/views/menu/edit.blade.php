@extends('layouts.main3')

@section('container')
<div class="row justify-content-center mt-4 mb-4">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Menu Form</h1>
            <form action="/menu/{{ $menu->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-floating">
                    <input type="text" name="name" value="{{ $menu->name }}"
                        class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                        placeholder="name" required>
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <div>
                        <img src="{{ Storage::url($menu->image) }}" alt="">
                    </div>
                    <input type="file" name="image" class="form-control @error('username') is-invalid @enderror"
                        id="image" required>
                    <label for="image"></label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="number" name="price" min="0.00" max="100000.00" step="0.01"
                        class="form-control rounded-top @error('name') is-invalid @enderror" id="price"
                        placeholder="name" value="{{ $menu->price }}" required>
                    <label for="price">Price</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <select name="categories" id="categories[]" class="form-control rounded-top" multiple>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected($menu->categories->contains($category))>{{
                            $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-floating">
                    <textarea name="description" class="form-control @error('username') is-invalid @enderror"
                        id="description" placeholder="email" required
                        value="{{ old('username') }}">{{ $menu->description }}</textarea>
                    <label for="description">description</label>
                </div>

                <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">Update</button>
            </form>
        </main>
    </div>
</div>
@endsection