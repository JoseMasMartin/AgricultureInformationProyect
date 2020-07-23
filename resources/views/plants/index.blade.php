
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Lista Plantas</title>

    <link rel="shortcut icon" href="https://i.pinimg.com/564x/9c/4e/1c/9c4e1cf8cff5fa1ca881872abc710bbe.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="color:black; background:white">
<div class="container" style="margin: 20px 50px;">
<div class="row" style="margin: 10px">

    <img src="https://i.pinimg.com/564x/9c/4e/1c/9c4e1cf8cff5fa1ca881872abc710bbe.jpg" width="110" alt="200">

    <h1>Lista De Plantas</h1>
</div>
    <div class="row float-right" style="margin-bottom: 10px; margin: 0px 10px;">
        <a href="/home" class="btn btn-success">
            Home
        </a>
    </div>
    <div class="row float-right" style="margin-bottom: 10px; margin: 0px 30px;">
        <a href="/diseases" class="btn btn-danger">
            Enfermedades
        </a>
    </div>
    <div class="row float-right" style="margin-bottom: 10px; margin: 0px 2px;">
        <a href="/pests" class="btn btn-warning">
            plagas
        </a>
    </div>
    <div class="row float-right" style="margin-bottom: 10px; margin: 0px 10px">
        <a href="/plants/search" class="btn btn-primary">
            Buscar
        </a>
    </div>
    @auth
        @if(Auth::user()->role->nombreRol=='admin')
    <div class="row float-right" style="margin-bottom: 10px; margin: 0px 10px;">
        <a href="/plants/create" class="btn btn-primary">
            Dar De Alta A Planta
        </a>
    </div>
            <div class="contene" style="margin: 10px 10px">
@endif
    @endauth
    <table class="table" style="margin: 80px auto">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Enfermedades</th>
            <th>Plagas</th>
            <th></th>
            <th></th>
            <th></th>

        </tr>
        @foreach($plants as $p)
            <tr>
                <td>
                    <font  color="Green" size=4&gt; face="Comic Sans MS,Arial,Verdana">

                        <strong>
                            <img src={{isset($p->photo) ? url($p->photo) : "https://informesinbandera.com/img/placeholder-img.png"}} alt="" width="150px">
                            {{$p->name}}

                        </strong>
                    </font>
                </td>
                <td>
                    <div class="des" style="width: 400px; text-align: justify">
                    <font  size=4&gt; face="Comic Sans MS,Arial,Verdana">
                        {{$p->description}}
                    </font>
                    </div>
                </td>

                <td>
                    <font color=red;size=4&gt; face="Comic Sans MS,Arial,Verdana">
                        {{$p->enfermedad}}
                    </font>
                </td>
                <td>
                    <font color="#daa520"; size=4&gt; face="Comic Sans MS,Arial,Verdana">
                        {{$p->plaga}}
                    </font>
                </td>


            @auth
                    @if(Auth::user()->role->nombreRol=='admin')
                <td><a href="/plants/{{$p->id}}/edit" class="btn btn-warning">
                        Editar
                    </a> </td>
                <td>
                    <form action="/plants/{{$p->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" name="eliminar" class="btn btn-danger" value="eliminar">
                    </form>
                </td>
                        @endif
                    @endauth
            </tr>
        @endforeach
    </table>
            </div>
</div>

</body>
</html>
