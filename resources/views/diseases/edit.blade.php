<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Edit</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background: #50CC66 ">
<div class="container">
    <h1>Editar Enfermedades</h1>
    <div class="container">
        <form method="post" action="/diseases/{{$disease->id}}" class="form-horizontal" id="form_disease" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="col-lg-6">

                <div class="form-group">
                    <label for="name" class="control-label">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$disease->name}}">
                </div>
            </div>
            <div class="col-lg-6">

                <div class="form-group">
                    <label for="description" class="control-label">Descripcion:</label>
                    <input type="text"  id="description" name="description" class="form-control" value="{{$disease->description}}">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="controlquimico" class="control-label">Control Quimico:</label>
                    <input type="text"  id="controlquimico" name="controlquimico" class="form-control" value="{{$disease->control_quimico}}">
                </div>
            </div>


            <div class="col-lg-6">
                <div class="form-group">
                    <label for="controlbiologico" class="control-label">Control Biologico:</label>
                    <input type="text"  id="controlbiologico" name="controlbiologico" class="form-control" value="{{$disease->control_biologico}}">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="controlcultural" class="control-label">Control Cultural:</label>
                    <input type="text"  id="controlcultural" name="controlcultural" class="form-control" value="{{$disease->control_cultural}}">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="prevencion" class="control-label">Prevencion:</label>
                    <input type="text"  id="prevencion" name="prevencion" class="form-control" value="{{$disease->prevencion}}">
                </div>
            </div>

            <input type="submit" name="enviar" id="btn_enviar" value="Guardar" class="btn-success">
        </form>
    </div>
</div>

</body>
</html>
