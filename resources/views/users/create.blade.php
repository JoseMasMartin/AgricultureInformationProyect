<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Users</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Registrar Usuarios</h1>
    <div class="container">
        <form method="post" action="/users" class="form-horizontal" id="form_users" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="rol" class="control-label">Rol:</label>
                    <select type="text" name="rol" id="rol" class="form-control">
                        <option value="">[Seleccione]</option>
                        @foreach($roles as $rol)
                            <option value="{{$rol->id}}">{{$rol->nombreRol}}</option>

                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name" class="control-label">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="email" class="control-label">Email:</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="password" class="control-label">Contraseña:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
            @auth
                @if(Auth::user()->role->nombreRol=='admin')

                    <input type="submit" name="enviar" id="btn_enviar" value="Guardar" class="btn-success">
                @endif
            @endauth
        </form>
    </div>
</div>
</body>
</html>

