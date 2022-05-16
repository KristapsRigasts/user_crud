@extends ('layout')

@section('content')

    <h2 class="text-center mt-3">All Users</h2>
    <div class="container text-center mt-3 mb-5">

        @if(count($users) <1)
            <div class="text-center">No users, yet! <a href="/users/create">Create a new user</a></div>

        @else
            <div class="row row-cols-3">
                @foreach($users as $user)
                    <div class="col">
                        <div class="mt-2 py-2 border border-secondary bg-light rounded">
                            <div><strong>Name:</strong> {{ $user->name }}</div>
                            <div><strong>Email:</strong> {{ $user->email }}</div>
                            <div><strong>Age:</strong> {{ $user->age }}</div>

                            <div class="mt-2 ">
                                <a href="/users/{{ $user->id }}/edit">
                                    Edit user
                                </a>
                            </div>
                            <div class="mt-2">
                                <form method="post" action="/users/{{ $user->id }}/delete">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit"
                                            onclick="return confirm('Are you sure?');">Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>


@endsection
