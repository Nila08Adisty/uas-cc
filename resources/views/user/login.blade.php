<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</head>

<body class="bg-info"lass>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-40 mx-auto">
                <form method="POST" action="{{ route('user.login.action') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            {{ $title }}
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-info">
                                    <ul>
                                        @foreach ($errors->all() as $err)
                                            <li>{{ $err }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Username" name="username" />
                                <div class="mb-3">
                                    <input class="form-control" type="password" placeholder="Password"
                                        name="password" />
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary w-100">Login</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
