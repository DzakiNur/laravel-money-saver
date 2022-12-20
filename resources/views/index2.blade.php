<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Menu</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
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
                <li> <a href="{{route('login')}}"><i class="fas fa-sign-out-alt"></i>Logout</a> </li>
            </ul>
        </div>
    </div>
    <div class="right" ondrop="drop(event)" ondragover="allowDrop(event)">
        <div class="col-sm-12">
        <table class="table">
            <thead>
                <tr class="table-dark">
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
    <script src="js/script.js"></script>
    
</body>

</html>