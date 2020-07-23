<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Usuarios</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Lista de usuarios</h1>
    <div class="row float-right" style="margin-bottom: 10px;">
        <a href="/home" class="btn btn-primary">
            Regresar
        </a>
    </div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Rol</th>
            <th>Email</th>
        </tr>
        @foreach($users as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>
                    <div class="form-group">
                    <select type="text" name="tipo" id="tipo" disabled class="form-control" style="width: 160px">
                        <option value="">[Seleccione]</option>
                        <option value="1" {{$p->role->id == 1 ? "selected" : ""}}>Administrador</option>
                        <option value="2" {{$p->role->id == 2 ? "selected" : ""}}>Invitado</option>
                    </select>
                    </div>
                </td>
                <td>{{$p->email}}</td>
                <td><a href="/users/{{$p->id}}/edit" class="btn btn-warning">
                        Editar Rol De Usuario
                    </a></td>
                <td>
                    <form action="/users/{{$p->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" name="eliminar" class="btn btn-danger" value="Eliminar">
                    </form>

            </tr>
        @endforeach
    </table>
</div>
</body>
</html>

