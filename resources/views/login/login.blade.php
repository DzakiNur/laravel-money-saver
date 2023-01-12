<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
     @if (session('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session ('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <div class="image"> <img src="img/blade-runner-2049.jpg"> </div>
        <div class="form-data">
            <form action="{{route('auth')}}" method="post">
                @csrf
                <h2>Login </h2>
                <div class="box-input"> <input type="text" placeholder="Email" name="email"> <label><i class="fas fa-envelope"></i></label> </div>
                <div class="box-input"> <input type="password" placeholder="Password" name="password"> <label><i class="fas fa-lock"></i></label> </div> <button>Login</button>
                <p>Create an Account ? <a href="{{route('register')}}">Sign Up</a></p>
            </form>
        </div>
    </div>
</body>
</html>