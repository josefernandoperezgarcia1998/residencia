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
            left: 310px;
            width: 70px;
            height: 70px;
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
            right: 508px;
            font-weight: bold;
        }

        .sugerencia-dosis-porciones > p{
            position: absolute;
            top: 730px;
            left: 40px;
            font-size: 15px;
        }

        .dato_general {
            position: absolute;
            left: 35px;
            bottom: 345px;
        }

        .dato_consulta {
            position: absolute;
            left: 35px;
        }

        .purple-letter {
            color: rgb(144, 30, 120);
        }

        .green-letter {
            font-weight: bold;
            color: rgb(1, 147, 62);
        }

        div > strong {
            font-family: Monospace;
        }

    </style>
</head>

<body>
    <div class="padre">
        <img class="logo" src="{{ public_path('fotos_estaticas/logo_oficial.jpg') }}" alt="logo">
        <br><br><br>
        <h2 class="titulo fuentes purple-letter">Centro Alternativo Homeopático</h2>
        <div class="info green-letter">Ubicado en 2da oriente entre 5ta y 6ta norte.</div>
        <div class="info green-letter">Código postal: 29046.</div>
        <div class="info green-letter">Tuxtla Gutiérrez, Chiapas</div>
        <br>
        <p>Exportado {{ now()->isoFormat('LLLL');}}</p>
        <br>
        <div style="overflow-x:auto;">
            <h4 class="dato_general purple-letter">DATOS GENERALES DEL PACIENTE</h4>
            <table class="bordesFuera">
                @foreach ($cita_data as $cita)
                <tr>
                    <th><strong class="green-letter">Nombre del paciente:</strong> {{$cita->paciente->nombre}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Edad:</strong> {{$cita->paciente->edad}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Estatura:</strong> {{$cita->paciente->estatura}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Peso:</strong> {{$cita->paciente->peso}} kg.</th> </tr> <tr>
                    <th><strong class="green-letter">Alergias:</strong> {{$cita->paciente->alergia}}.</th>
                </tr>
            </table>
            <br>
            <h4 class="dato_consulta purple-letter">DATOS DE LA CONSULTA</h4>
            <br><br>
            <table class="bordesFuera">
                <tr>
                    <th><strong class="green-letter">Padecimiento: </strong> {{$cita->padecimiento}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Medicina tomada previamente: </strong> {{$cita->medicamento}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Terapias que ha tomado: </strong> {{$cita->terapia}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Terapias externas: </strong> {{$cita->terapia_otro}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Aplicación de ozono: </strong> {{$cita->ozono}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Aplicación de acupuntura: </strong> {{$cita->acupuntura}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Aplicación de limpieza en oídos: </strong>
                        {{$cita->limpieza_oido}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Mejoría: </strong>{{$cita->mejoria}} -
                        {{$cita->mejoria_descripcion}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Síntoma ó inquietud: </strong>{{$cita->sintoma_inquietud}}.</th>
                </tr>
                <tr>
                    <th><strong class="green-letter">Presión arterial: </strong>Sistólica: {{$cita->sistolica}} |
                        Diastólica {{$cita->diastolica}}.</th>
                </tr>
            </table>
            {{--                 <tr>
                    
                    <td>{{$cita->padecimiento}}</td>
            <td>{{$cita->hora_cita}}</td>
            </tr> --}}
            @endforeach

            <br>
            <div>
                <div class="sugerencia purple-letter">
                    RECOMENDACIÓN:
                </div>
                <div class="sugerencia-dosis-porciones">
                    <p class="green-letter">Dosis: </p>
                    <p class="green-letter">Porciones: </p>
                </div>
                <br><br><br><br><br>
                <div class="firma">
                    ____________________<br>
                    Firma del médico
                </div>
                <br>
                <div class=""><strong class="purple-letter">CENTRO ALTERNATIVO HOMEOPÁTICO </strong>-<strong class="green-letter"> Restableciendo tu salud</strong></div>
            </div>
        </div>
    </div>
</body>

</html>
