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
            padding: 8px;
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

        .titulo{
            text-transform: uppercase;
        }
        .fuentes {
            font-family: 'Mulish', sans-serif;
        }

        .padre {
            background-color: #fafafa;
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
        }

        td {
            background-color: white;
        }

        div > .info{
            font-size: 12px;
        }
        
        .sugerencia{
            position: absolute;
            right: 503px;
            font-weight: bold;
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
            <table class="bordesFuera">
                <tr>
                    <th>Nombre del paciente</th>
                    <th>Padecimiento</th>
                    <th>Fecha y hora de la cita</th>
                </tr>
                @foreach ($cita_data as $cita)
                <tr>
                    <td>{{$cita->paciente->nombre}}</td>
                    <td>{{$cita->padecimiento}}</td>
                    <td>{{$cita->hora_cita}}</td>
                </tr>
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
