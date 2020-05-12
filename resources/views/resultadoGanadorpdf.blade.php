<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de calificaciones</title>
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875rem;
            font-weight: normal;
            line-height: 1.5;
            color: #151b1e;
        }

        .table {
            display: table;
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
        }

        .table-bordered {
            border: 1px solid #c2cfd6;
        }

        thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }

        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        .table th, .table td {
            padding: 0.20rem;
            vertical-align: top;
            border-top: 1px solid #c2cfd6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #c2cfd6;
        }

        .table-bordered thead th, .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-bordered th, .table-bordered td {
            border: 1px solid #c2cfd6;
        }

        th, td {
            display: table-cell;
            vertical-align: inherit;
        }

        th {
            font-weight: bold;
            text-align: -internal-center;
            text-align: left;
        }

        tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }

        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .izquierda {
            float: left;
        }

        .derecha {
            float: right;
        }
    </style>
</head>
<body>
<header>
    <div style="position: relative; left: -10px; text-align: center;">
        <img width="700" height="100" src="img/header.jpeg" alt="CompartiendoCodigo" id="imagen">
    </div>
    <div style=" text-align: center;">
        <h1>ELECCIÓN REINA DE TANICUCHI</h1>
        <h1>2019 - 2020</h1>
    </div>

</header>
<div>
    <h5><span class="derecha"> Fecha:{{now()}}</span></h5>
</div>
<br>
<div style="height: 25px; text-align: left; width:
    725px; background-color: #1d68a7; font-size: 12px; color: white;">
    <h3>HOJA DE RESULTADOS</h3>
</div>
<div>

</div>
<div>
    <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr>
            <th>Candidata</th>
            <th>Barrio</th>
            <th>Inicial</th>
            <th>Gala</th>
            <th>Pregunta</th>
            <th>Total</th>
            <th>Dignidad</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($resultados as $a)
            <tr>
                <td>{{$a->nombre}} {{$a->apellido}} </td>
                <td>{{$a->barrio}}</td>
                <td>{{$a->inicial}}</td>
                <td>{{$a->gala}}</td>
                <td>{{$a->pregunta}}</td>
                <td>{{$a->calificacion}}</td>
                @if($a->calificacion == $reina)
                    <td>Reina</td>
                @endif
                @if($a->calificacion == $confra)
                    <td>Confraternidad</td>
                @endif
                @if($a->calificacion == $simpa)
                    <td>Simpatía</td>
                @endif
            </tr>


        @endforeach
        </tbody>
    </table>
</div>
<div style="height: 25px; text-align: left; width:
    725px; background-color: #1d68a7; font-size: 12px; color: white;">
    <h3>RESULTADOS RESTO DE PARTICIPANTES</h3>
</div>
<div>

</div>
<div>
    <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr>
            <th>Candidata</th>
            <th>Barrio</th>
            <th>Inicial</th>
            <th>Gala</th>
            <th>Pregunta</th>
            <th>Total</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($resultadosLista as $a)
            <tr>
                <td>{{$a->nombre}} {{$a->apellido}} </td>
                <td>{{$a->barrio}}</td>
                <td>{{$a->inicial}}</td>
                <td>{{$a->gala}}</td>
                <td>{{$a->pregunta}}</td>
                <td>{{$a->calificacion}}</td>
            </tr>


        @endforeach
        </tbody>
    </table>
</div>
<br><br><br>
<div style="margin-left: 100px;" class="izquierda">

    <p><strong>  </strong>---------------------------------</p>
    <p><strong>     Nombre Notario</strong></p>
    <p><strong>Dra. Diana Palma Pacheco</strong></p>


</div>
<div style="margin-right: 100px;" class="derecha">
    <p><strong>  </strong>---------------------------------</p>
    <p><strong>Nombre Presidente GAD</strong></p>
    <p><strong>Ing. Geovanny Casa</strong></p>
</div>
</body>
</html>