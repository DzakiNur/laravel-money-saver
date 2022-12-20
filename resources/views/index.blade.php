
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Money Saver</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h1>Money Saver</h1>
    <br>
    <form action="{{route('storeMoney')}}" method="post">
        @csrf
        <label for="">Nama Lengkap :</label>
        <input type="text" placeholder="Masukkan Nama..." name="nama">
        <label for=""> NIS :</label>
        <input type="text" placeholder="Masukkan Nis..." minLength="8" maxLength="8" name="nis">
        <label for="">Rayon :</label>
        <select name="rayon" id="rayon">
            @for($i=1 ; $i<=5 ; $i++)
            <option>Ciawi {{$i}}</option>
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
        </select><br><br>
        <input class="btn btn-success" type="submit" value="Submit">
    </form>
    <br><br><br>
    <div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>NIS</th>
                <th>Rayon</th>
                <th>Money</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($data as $dt)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td>{{$dt->nama}}</td>
                <td>{{$dt->nis}}</td>
                <td>{{$dt->rayon}}</td>
                <td>Rp {{$dt->money}}</td>
                <td>
                    <form action="{{route('deleteMoney', $dt->id)}}" method="POST">
                        <a href="{{route('editMoney', $dt->id)}}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                        @csrf
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
    </div>
</body>
</html>