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
    <h1>Editar Rol De usuario</h1>
    <div class="clontainer">
        <form method="post" action="/users/{{$user->id}}" class="form-horizontal" id="form_products" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="roles" class="control-label">Roles:</label>
                    <select type="text" name="roles" id="roles" class="form-control">
                        <option value="">[Seleccione]</option>
                        @foreach($roles as $rol)
                            <option value="{{$rol->id}}" {{$rol->id == $user->role_id ? 'selected' : ''}}}>{{$rol->nombreRol}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name" class="control-label">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <input type="submit" name="enviar" id="btn_enviar" value="Guardar" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
