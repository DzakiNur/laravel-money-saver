<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Identity</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
</head>
<body>
    <div class="left" ondrop="drop(event)" ondragover="allowDrop(event)">
            <div class="side_menu" ondragstart="dragStart(event)" draggable="true" id="dragtarget">
                <ul>
                    <div class="side_menu_profile">
                        <div class="profile_image"> <img src="img/dzakinur.jpg"/>
                            <p>Dzaki Nur</p>
                        </div>
                    </div>
                    <li> <a href="{{route('index')}}"><i class="fas fa-home"></i>Home</a> </li>
                    <li> <a href="{{route('indexMoney')}}"><i class="fas fa-marker"></i>Add</a> </li>
                    <li> <a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a> </li>
                </ul>
            </div>
        </div>
    <div class="right" ondrop="drop(event)" ondragover="allowDrop(event)">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session ('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container">
                <main class="form-register input">
                    <div class="card shadow p-5 bg-secondary bg-opacity-25">
                    <form action="{{route('storeMoney')}}" method="POST">
                    @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Add Your Fucking Identity</h1>
                        @error ('nis')
                            <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                            </div>
                        @enderror
                        <div class="form-floating">
                            <input type="text" class="form-control mt-2" id="nama" placeholder="Masukkan Nama..." name="nama">
                            <label for="nama">Nama Lengkap</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="nis" class="form-control mt-2" id="nis" minlength=8 maxlength=8 placeholder="Masukkan Nis...">
                            <label for="nis">NIS</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="rayon">
                                @for($i=1 ; $i<=5 ; $i++)
                                <option>Ciawi {{$i}}</option>
                                @endfor
                    
                                @for($i=1 ; $i<=3 ; $i++)
                                <option>Cibedug {{$i}}</option>
                                @endfor

                                @for($i=1 ; $i<=6 ; $i++)
                                <option>Cisarua {{$i}}</option>
                                @endfor
                    
                                @for($i=1 ; $i<=7 ; $i++)
                                <option>Cicurug {{$i}}</option>
                                @endfor
                    
                                @for($i=1 ; $i<=4 ; $i++)
                                <option>Tajur {{$i}}</option>
                                @endfor
                                
                                @for($i=1 ; $i<=4 ; $i++)
                                <option>Wikrama {{$i}}</option>
                                @endfor
                            </select>
                            <label for="floatingSelect">Rayon</label>
                        </div>
                        <div class="row justify-content-center">
                        <button class="w-50 btn btn-lg btn-secondary mt-4" type="submit">Confirm</button>
                        </div>
                    </form>
                </div>
                </main>
            </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/script.js"></script>

    
</body>
</html>