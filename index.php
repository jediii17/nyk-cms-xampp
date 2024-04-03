<!DOCTYPE html>
<html lang="en">

<style>
    .background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        min-height: 100vh;
        background-image: url("images/login_bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        z-index: -1;
        filter: blur(2px) brightness(50%);
        transform: scale(1.1);
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NYK-FIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="background"></div>
    <div class="row" style="height: 105vh;">
        <div class="col-5 bg-white p-5 d-flex align-items-center">
            <div class="p-5">
                <form action="" class="shadow-lg p-5 bg-white rounded-3">
                    <div class="row-auto mb-2">
                        <img src="images/NETI_logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="row-auto mb-3">
                        <div>
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="row-auto mb-4">
                        <div class="">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="row-auto text-start mb-4">
                        <div class=" d-flex justify-content-between ">
                            <div class="">
                                <input type="checkbox" id="checkRememberMe" class="form-check-input">
                                <label for="checkRememberMe" class="form-label">Remember Me</label>
                            </div>
                            <div>
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </div>
                    <div class="row-auto text-end">
                        <div class="">
                            <button class="btn btn-primary w-auto">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-5">
            <div class="container-fluid"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<script>
</script>