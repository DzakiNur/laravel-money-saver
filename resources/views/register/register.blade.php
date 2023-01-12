<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session ('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <div class="image"> <img src="img/nightcrawler.jpg"></div>
        <div class="form-data">
            <form action="{{route('storeRegister')}}" method="post">
                @csrf
                <h2>Register </h2>
                <div class="box-input"> <input type="text" placeholder="Username" name="name"><label><i class="fas fa-user"></i></label> </div>
                <div class="box-input"> <input type="text" placeholder="Email" name="email"><label><i class="fas fa-envelope"></i></label> </div>
                <div class="box-input"> <input type="password" placeholder="Password" name="password"> <label><i class="fas fa-lock"></i></label> </div> <button type="submit">Register</button>
                <p>Already have an Account ? <a href="{{route('login')}}">Sign In</a></p>
            </form>
        </div>
    </div>
</body>
</html>