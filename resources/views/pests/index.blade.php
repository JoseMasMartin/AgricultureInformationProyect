<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Plagas</title>


    <link rel="shortcut icon" href="https://i.pinimg.com/564x/9c/4e/1c/9c4e1cf8cff5fa1ca881872abc710bbe.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background: #FFB064">
<div class="container " style="margin: 40px 40px;">

    <h1>Lista De Plagas</h1>

    <div class="row float-right" style="margin: 0px 40px;">
        <a href="/plants" class="btn btn-secondary">
            Regresar
        </a>
    </div>
    <div class="row float-right" style="margin-bottom: 2px;">
        <a href="/pests/search" class="btn btn-primary">
            Buscar
        </a>
    </div>
    @auth
        @if(Auth::user()->role->nombreRol=='admin')
            <div class="row float-right" style="margin: 0px 40px;">
                <a href="/pests/create" class="btn btn-primary">
                    Dar De Alta A Plaga
                </a>
            </div>
        @endif
    @endauth

    <table class="table"style="margin: 80px auto">
        <tr>

            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Control Quimico</th>
            <th>Control Biologico</th>
            <th>Control Cultural</th>
            <th>Prevencion</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach($pests as $p)
            <tr>
                <td>
                    <img src={{isset($p->photo) ? url($p->photo) : "https://informesinbandera.com/img/placeholder-img.png"}} alt="" width="150px">
                    {{$p->name}}

                </td>

                <td>
                <div class="descrip" style="width: 300px; text-align: justify">
                    {{$p->description}}
                </div>
                </td>
                <td>
                    <div class="quimico"style="width: 300px; text-align: justify">
                    {{$p->control_quimico}}
                    </div>
                </td>
                <td>
                    <div class="biologico" style="width: 300px; text-align: justify">
                    {{$p->control_biologico}}
                    </div>
                </td>
                <td>
                    <div class="cultural" style="width: 300px; text-align: justify">
                    {{$p->control_cultural}}
                </div>
                </td>
                <td>
                    <div class="preve" style="width: 300px; text-align: justify">
                    {{$p->prevencion}}
                </div>
                </td>

                @auth
                    @if(Auth::user()->role->nombreRol=='admin')
                        <td><a href="/pests/{{$p->id}}/edit" class="btn btn-warning">
                                Editar
                            </a> </td>
                        <td>
                            <form action="/pests/{{$p->id}}" method="post">
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

