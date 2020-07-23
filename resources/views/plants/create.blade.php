<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Plants</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Registrar Plantas</h1>
    <div class="container">
        <form method="post" action="/plants" class="form-horizontal" id="form_plants" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name" class="control-label">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="description" class="control-label">Descripcion:</label>
                    <input type="text" name="description" id="description" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="enfermedad" class="control-label">Enfermedades:</label>
                    <input type="text" name="enfermedad" id="enfermedad" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="plague" class="control-label">Plagas:</label>
                    <input type="text" name="plague" id="plague" class="form-control">
                </div>
            </div>



    <div class="col-lg-6">
        <div class="form-group">
            <label for="imagen" class="control-label">Imagen:</label>
            <input type="file" class="form-control"  accept="image/*" name="imagen"/>
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
