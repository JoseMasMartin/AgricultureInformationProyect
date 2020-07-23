<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Search</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <link rel="shortcut icon" href="https://i.pinimg.com/564x/9c/4e/1c/9c4e1cf8cff5fa1ca881872abc710bbe.jpg">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background: #50CC66 ">

<div class="container" style="margin: 15px auto">
    <h1>Buscador de Enfermedades</h1>

    <div class="row float-right" style="margin: 0px 40px;">
        <a href="/diseases" class="btn btn-secondary">
            Regresar
        </a>
    </div>
    <form class="form-inline">
        <input  name="buscador" class="form-control mr-sm-2" style="width: 150px; height: 25px;" type="search" placeholder="nombre" aria-label="Search">

        <input  name="descrip" class="form-control mr-sm-2" style="width: 100px; height: 25px; margin: 10px" type="search" placeholder="descripcion" aria-label="Search">

        <div class="col-md-2">

            <button class="btn btn-info" type="submit" >Search</button>
        </div>

    </form>

    @foreach($diseases as $p)

        <div class="container">
            <div class="col-md-10" >
                <h2 class="country">{{$p->name}}</h2>
            </div>
            <div class="col-md-10" style="margin: 10px 0; text-align: justify">
                <h3>Descripcion:</h3>
                <h4 class="country"style="margin: 10px 0;">{{$p->description}}</h4>
                <h3>Control Quimico:</h3>
                <h4 class="country"style="margin: 10px 0;">{{$p->control_quimico}}</h4>
                <h3>Control Biologico:</h3>
                <h4 class="country"style="margin: 10px 0;">{{$p->control_biologico}}</h4>
                <h3>Control Cultural:</h3>
                <h4 class="country"style="margin: 10px 0;">{{$p->control_cultural}}</h4>
                <h3>Prevencion:</h3>
                <h4 class="country"style="margin: 10px 0;">{{$p->prevencion}}</h4>


            </div>
        </div>
    @endforeach
</div>
</body>
</html>
