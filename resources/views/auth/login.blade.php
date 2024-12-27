<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Design</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
   
</head>

<body>
    @include('layouts.navbar')
    <div class="container mt-3 p-4" style="background-color: #9498b8; border-radius: 20px;">
        <div class="row p-5">
            <div class="col-md-3" style="height: 300px; background-color: #b45252;" >
                hello
            </div>
            <div class="col-md-6" style="height: 400px; background-color: #5A67D8; border-radius: 20px;">
                <h1>Welcome to Freep</h1>
                <p>Login to manage your account</p>
                <form>
                    <input type="email" class="form-control mb-3" placeholder="Email address">
                    <input type="password" class="form-control mb-3" placeholder="Password">
                    <div class="d-flex justify-content-between mb-3">
                        <a href="#" class="text-light">Forgot your password?</a>
                    </div>
                    <button type="submit" class="btn btn-login w-100 mb-3" style="background-color: #4D51BF">Login</button>
                </form>
                <div class="card-footer">
                    Not a member yet? <a href="#">Create an account</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
