<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Enfermedades</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background: #50CC66 ">
<div class="container">
    <h1>Registrar Enfermedades</h1>
    <div class="container">
        <form method="post" action="/diseases" class="form-horizontal" id="form_diseases" enctype="multipart/form-data">
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
                    <label for="controlquimico" class="control-label">Control Quimico:</label>
                    <input type="text" name="controlquimico" id="controlquimico" class="form-control">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="controlbiologico" class="control-label">Control Biologico:</label>
                    <input type="text" name="controlbiologico" id="controlbiologico" class="form-control">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="controlcultural" class="control-label">Control Cultural:</label>
                    <input type="text" name="controlcultural" id="controlcultural" class="form-control">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="prevencion" class="control-label">Prevencion:</label>
                    <input type="text" name="prevencion" id="prevencion" class="form-control">
                </div>
            </div>
            @auth
                @if(Auth::user()->role->nombreRol=='admin')
            <input type="submit" name="enviar" id="btn_enviar" value="Guardar" class="btn-dark">
        </form>
@endif
        @endauth
    </div>
</div>

</body>
</html>
