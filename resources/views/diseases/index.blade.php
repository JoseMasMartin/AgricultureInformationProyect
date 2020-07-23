<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Lista Enfermedades</title>

    <link rel="shortcut icon" href="https://i.pinimg.com/564x/9c/4e/1c/9c4e1cf8cff5fa1ca881872abc710bbe.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background: #50CC66 ">
<div class="container" style="margin: 20px 60px">
    <h1>Lista De Enfermedades</h1>

    <div class="row float-right" style="margin: 0px 40px;">
        <a href="/plants" class="btn btn-secondary">
            Regresar
        </a>
    </div>
    <div class="row float-right" style="margin: 0px 10px; margin-bottom: 2px;">
        <a href="/diseases/search" class="btn btn-primary">
            Buscar
        </a>
    </div>
    @auth
        @if(Auth::user()->role->nombreRol=='admin')
    <div class="row float-right" style="margin: 0px 10px;">

        <a href="/diseases/create" class="btn btn-primary">
            Dar De Alta A Enfermedad
        </a>
    </div>
@endif
    @endauth
    <table class="table" style="margin: 80px auto">
        <tr>

            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Prevencion</th>
            <th>Control quimico</th>
            <th>Control Biologico</th>
            <th>Control Cultural</th>
            <th></th>

        </tr>
        @foreach($diseases as $d)
            <tr>

                <td>
                    {{$d->name}}
                </td>
                <td>
                <div class="desc" style="width: 300px; text-align: justify">
                    {{$d->description}}
                </div>
                </td>
                <td>
                   <div class="preven" style="width: 300px; text-align: justify">
                    {{$d->prevencion}}
                   </div>
                </td>
                <td>
                    <div class="quimico" style="width: 300px; text-align: justify">
                    {{$d->control_quimico}}
                    </div>
                </td>
                <td>
                    <div class="biologico" style="width: 300px; text-align: justify">
                    {{$d->control_biologico}}
                </div>
                </td>
                <td>
                    <div class="cultural" style="width: 300px; text-align: justify">
                    {{$d->control_cultural}}
                    </div>
                </td>
                @auth
                    @if(Auth::user()->role->nombreRol=='admin')
                <td><a href="/diseases/{{$d->id}}/edit" class="btn btn-warning">
                        Editar
                    </a> </td>
                <td>
                    <form action="/diseases/{{$d->id}}" method="post">
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

</body>
</html>
