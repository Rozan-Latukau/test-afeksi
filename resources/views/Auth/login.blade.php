<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" />
    <title>Login</title>
</head>

<body>
    <div class="container d-flex align-items-center">
        <div class="row shadow-sm  rounded-3 p-3">
            <div class="col-md-6">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/login.jpg') }}" alt="Image Login" class="w-75" />
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <h3 class="fw-bold">LOGIN, AFEKSI INDONESIA</h3>
                <p class="fw-medium">Enim pariatur do fugiat occaecat enim.</p>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="Masukkan Email">
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
