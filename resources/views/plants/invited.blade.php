<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Lista Plantas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Lista De Plantas</h1>
    <div class="row float-right" style="margin-bottom: 10px; margin: 0px 30px;">

        <a href="/diseases" class="btn btn-success">
            Enfermedades
        </a>
    </div>
    <div class="row float-right" style="margin-bottom: 10px; margin: 0px 2px;">

        <a href="/pests" class="btn btn-success">
            plagas
        </a>
    </div>
    <div class="row float-right" style="margin-bottom: 10px; margin: 0px 10px">
        <a href="/plants/search" class="btn btn-primary">
            Buscar
        </a>

    </div>
    <div class="row float-right" style="margin-bottom: 10px; margin: 0px 10px;">

        <a href="/plants/create" class="btn btn-primary">
            Dar De Alta A Planta
        </a>
    </div>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Enfermedad</th>
            <th>Foto</th>


            <th></th>
            <th></th>

        </tr>
        @foreach($plants as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->description}}</td>

                <td>{{$p->disease->name}}</td>
                <td>            <div class="col-md-3">
                        <img src={{isset($p->photo) ? url($p->photo) : "https://informesinbandera.com/img/placeholder-img.png"}} alt="" width="250px">
                    </div>
                </td>
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
            </tr>
        @endforeach
    </table>
</div>

</body>
</html>
