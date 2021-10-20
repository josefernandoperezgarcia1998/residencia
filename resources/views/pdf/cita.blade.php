<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 3px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        .logo {
            position: absolute;
            left: 300px;
            width: 80px;
            height: 80px;
        }

        .titulo {
            text-transform: uppercase;
        }

        .fuentes {
            font-family: 'Mulish', sans-serif;
        }

        .padre {
            background-color: rgb(254, 254, 254);
            margin: 1rem;
            padding: 1rem;
            border: 2px solid #ccc;
            /* IMPORTANTE */
            text-align: center;
        }

        table,
        td,
        th {
            border: none;
            font-size: 90%;
            background-color: rgb(254, 254, 254);
            font-weight: normal;

        }

        td {
            background-color: white;
        }

        div>.info {
            font-size: 12px;
        }

        .sugerencia {
            position: absolute;
            right: 503px;
            font-weight: bold;
        }

        .dato_general {
            position: absolute;
            left: 35px;
            bottom: 450px;
        }

    </style>
</head>

<body>
    <div class="padre">
        <img class="logo" src="{{ public_path('fotos_estaticas/logo_v3.png') }}" alt="logo">
        <br><br><br>
        <h2 class="titulo fuentes">Centro Alternativo Homeopático</h2>
        <div class="info">Calle: 2da oriente entre 5ta y 6ta norte.</div>
        <div class="info">Código postal: 29046.</div>
        <div class="info">Tuxtla Gutiérrez, Chiapas</div>
        <br><br>
        <div style="overflow-x:auto;">
            <h4 class="dato_general">DATOS GENERALES DEL PACIENTE</h4>
            <br>
            <table class="bordesFuera">
                @foreach ($cita_data as $cita)
                <tr>
                    <th><strong>Nombre del paciente:</strong> {{$cita->paciente->nombre}}.</th>
                </tr>
                <tr>
                    <th><strong>Edad:</strong> {{$cita->paciente->edad}}.</th>
                </tr>
                <tr>
                    <th><strong>Estatura:</strong> {{$cita->paciente->estatura}}.</th>
                </tr>
                <tr>
                    <th><strong>Peso:</strong> {{$cita->paciente->peso}} kg.</th>
                </tr>
                <tr>
                    <th><strong>Alergias:</strong> {{$cita->paciente->alergia}}.</th>
                </tr>

                {{--                 <tr>
                    
                    <td>{{$cita->padecimiento}}</td>
                <td>{{$cita->hora_cita}}</td>
                </tr> --}}
                @endforeach
            </table>
            <br>
            <div>
                <div class="sugerencia">
                    RECOMENDACIÓN:
                </div>
                <br><br><br>
                <div class="firma">
                    ____________________<br>
                    Firma del médico
                </div>
                <p>Exportado {{ now()->isoFormat('LLLL');}}</p>
            </div>
        </div>
    </div>
</body>

</html>
