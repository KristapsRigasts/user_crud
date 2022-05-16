<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>


<body class="bg-secondary bg-opacity-25">

<div>
    <nav class="nav justify-content-center bg-secondary bg-opacity-10 ">
        <a class="nav-link text-decoration-none"  href="/users" >All Users</a>
        <a class="nav-link text-decoration-none"  href="/users/create">Create New User</a>
    </nav>
</div>

<div>
    @yield('content')
</div>


@if(session()->has('success'))
    <div
         class="position-fixed bottom-0 end-0 p-3 mb-2 text-primary">
        <p> {{ session('success') }}</p>
    </div>
@endif

</body>
</html>
