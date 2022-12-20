<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style>
        .container{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="row justify-content-center">
        <div class="container">
            <main class="form-register input">
                <div class="card shadow p-5 bg-secondary bg-opacity-25">
            <form action="{{route('updateMoney', $data->id)}}" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control mt-2" id="nama" placeholder="Masukkan Nama..." name="nama">
                    <label for="nama">Nama Lengkap</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control mt-2" id="nis" placeholder="Masukkan Nis..." minlength="8" name="nis">
                    <label for="nis">NIS</label>
                </div>
                    <select name="rayon" id="rayon">
                        <option value="rayon">Ciawi</option>
                        <option value="rayon">Ciawi</option>
                        <option value="rayon">Ciawi</option>
                        <option value="rayon">Ciawi</option>
                        <option value="rayon">Ciawi</option>
                        <option value="rayon">Ciawi</option>
                        <option value="rayon">Ciawi</option>
                        <option value="rayon">Ciawi</option>
                        <option value="rayon">Ciawi</option>
                        <option value="rayon">Ciawi</option>
                    </select><br><br>
                    <input type="submit" value="Submit">
            </form>
                </div>
        </div>
    </div>
</body>
</html>