@extends ('layout')

@section('content')
    <h2 class="text-center mt-3"> Edit a user</h2>
    <div class="container mt-3 text-center">
        <form method="POST" action="/users/{{ $user->id }}/update">
            @csrf
            @method('PATCH')

            <div class="mt-3">
                <label for="name"></label>
                <input class="border border-secondary rounded" type="text" id="name" name="name" placeholder="Name"
                       required value="{{ $user->name }}">
            </div>

            <div class="mt-3">
                <label for="email"></label>
                <input class="border border-secondary rounded" type="email" id="email" name="email" placeholder="Email"
                       required value="{{ $user->email }}">
            </div>

            <div class="mt-3">
                <label for="password"></label>
                <input class="border border-secondary rounded" type="password" id="password" name="password"
                       placeholder="Password" required value="">
            </div>

            <div class="mt-3">
                <label for="age"></label>
                <input class="border border-secondary rounded" type="text" id="age" name="age" placeholder="Age"
                       required value="{{ $user->age }}">
            </div>

            <div class="mt-3 mb-3">
                <button type="submit" name="submit" class="btn btn-md btn-primary btn-block">Update</button>
            </div>
        </form>
    </div>
    <div class="text-center">
        @error('name')
        <div>
            <small class="text-danger">{{ $message }}</small>
        </div>
        @enderror
        @error('email')
        <div>
            <small class="text-danger">{{ $message }}</small>
        </div>
        @enderror
        @error('password')
        <div>
            <small class="text-danger">{{ $message }}</small>
        </div>
        @enderror
        @error('age')
        <div>
            <small class="text-danger font-size">{{ $message }}</small>
        </div>
        @enderror
    </div>

@endsection
