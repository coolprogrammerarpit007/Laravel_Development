<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
    {{-- CSS Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="{{ url('/') }}/register" method="POST">
        @csrf
        </pre>
        <div class="container">
            <h1 class="text-center">Registration</h1>
            <x-input type="text" name="name" label="Name" id="name" />
            <x-input type="email" name="email" label="Email" id="email" />
            <x-input type="password" name="password" label="Password" id="password" />
            <x-input type="password" name="confirm_password" label="Confirm Password" id="name" />
            <button class="btn btn-primary" id="btn">Submit</button>
        </div>
    </form>
</body>
<script src="{{ asset('js/app.js')}}"></script>
</html>
