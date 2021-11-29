@extends('layouts.general')

@section('nombre_de_la_pagina')
Historial Médico
@endsection

@section('contenido_de_la_pagina')
{{-- Inicio Estilos css con Bootstrap 4 para datatables --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
{{-- Fin Estilos css con Bootstrap 4 para datatables --}}
{{-- Inicio para datatable responsive  --}}
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
{{-- Fin para datatable responsive  --}}
<div class="content">
    @if (session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>{{ session('success')}}</span>
    </div>

    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('historial_medico.create') }}" class="btn btn-info btn-sm">Nueva cita</a>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Historial Médico General</h4>
                        <p class="card-category">Listado de citas médicas registradas en el sistema</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="citas">
                                <thead class="text-primary">
                                    <th>Nombre del paciente</th>
                                    <th>Padecimiento</th>
                                    <th>Fecha</th>
                                    <th>Celular paciente</th>
                                    <th>Acciones</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Inicio Estilos y JS para datatables --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
{{-- Fin Estilos y JS para Datatables --}}
{{-- Inicio para responsive de datatables --}}
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
{{-- Fin para responsive de datatables --}}
<script>
    $(document).ready(function () {
        $('#citas').DataTable({
            responsive: true,
            autoWidth: false,

            "language": {
                "lengthMenu": "Mostrar" +
                    `<select class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value='10'>10</option>
                                            <option value='25'>25</option>
                                            <option value='50'>50</option>
                                            <option value='-1'>Todo</option>
                                            </select>` +
                    "registros por página",
                "zeroRecords": "Sin registros",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                'search': 'Buscar:',
                'paginate': {
                    'next': 'Siguiente',
                    'previous': 'Anterior'
                }
            },

            "serverSide": true,
            "ajax": "{{ route('datatableHistorial') }}",
            "columns": [
                {data: 'pacienteNombre', name: 'pacienteNombre'},
                {data: 'padecimiento',  name: 'padecimiento'},
                {data: 'hora_cita',  name: 'hora_cita'},
                {data: 'pacienteCelular', name: 'pacienteCelular'},
                {data: 'btn'},
            ]
        })
    });

</script>
@endsection
