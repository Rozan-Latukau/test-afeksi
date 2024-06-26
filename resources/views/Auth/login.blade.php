<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row shadow-sm h-100 m-lg-5 m-md-0">
            <div class="col-md-6 bg-secondary d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/login.png') }}" alt="Image Login" class="w-100" />
            </div>
            <div class="col-md-6 align-self-center p-5">
                <h3 class="fw-bold">LOGIN, AFEKSI INDONESIA</h3>
                <p class="fw-medium">Enim pariatur do fugiat occaecat enim.</p>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="Masukkan Email">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-4">
                    <a href="#" class="text-primary fs-6 text-decoration-none">Forgot Password ?</a>
                </div>
                <div class="mb-5 gap-2 d-md-flex">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="submit" class="btn btn-white border border-black">Batal</button>
                </div>

                <div>
                    <p class="text-center mb-2 fw-light">Membuat akun dibawah ini</p>
                    <a href="{{ route('daftar') }}" type="submit" class="btn w-100 border border-black">Create
                        Account</a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
