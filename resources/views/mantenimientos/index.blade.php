@extends('layouts.app')

@section('title', 'Mantenimientos')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatable.min.css') }}" defer/>
    <style>
        .dataTables_wrapper label{
            color: #343A40;
        }
        .dataTables_wrapper{
            color: #343A40;
        }
        #casos_info{
            color: #343A40;
        }
        .dataTable thead, tfoot{
            color: #343A40;
        }
        .dataTables_length select{
            /*border:solid 1px #0261B1 !important;*/
        }
        #casos_filter input{
            border: solid 1px #0261B1;
            background: #fff;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: #343A40 !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            /*background: #0261B1;*/
        }
        .btn:hover{
            opacity:0.8;
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary  text-center"><h3 class="text-white">Lista de Mantenimientos de vehiculos realizados</h3></div>
                    <div class="card-body bg-light" >
                        <div class="row my-3">
                            <div class="col">
                                <a href="{{route('mantenimiento.create')}}" class="btn bg-primary text-white float-right agregar"><span class="fa fa-plus"></span> Crear Nuevo Mantenimiento</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table id="casos" class="display cell-border" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Nombre del Propietario</th>
                                            <th>Marca de Vehículo</th>
                                            <th>Fecha de Entrada</th>
                                            <th>Fecha de Salida</th>
                                            <th>Estado</th>
                                            <th>Costo</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mantenimientos as $mantenimiento)
                                            <tr>
                                                <td>
                                                    {{ $mantenimiento->nombre_propietario }}
                                                </td>
                                                <td>
                                                    {{ $mantenimiento->marca_vehiculo }}
                                                </td>
                                                <td>{{ $mantenimiento->fecha_entrada }}</td>
                                                <td>{{ $mantenimiento->fecha_salida }}</td>
                                                <td>{{ $mantenimiento->estado }}</td>
                                                <td>{{ $mantenimiento->mano_obra }} RD$</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="{{ route('mantenimiento.edit', $mantenimiento->getKey()) }}" class="btn btn-warning py-1"><span class='fa fa-edit'></span> Editar</a>

                                                            <form action="{{ route('mantenimiento.destroy', $mantenimiento->getKey()) }}" method="POST" id="frm-del">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a class='btn btn btn-danger show_confirm py-1 my-1'><span class='fa fa-trash'></span> Eliminar</a> 
                                                            </form>                                                        
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/datatable.min.js') }}" ></script> 
<script>
    $(document).ready(function() {

        $('#casos').DataTable({
            "language": {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
            },
            "order": [[ 0, "desc" ]],
            scrollResize: true,
            scrollX: true,
            scrollY: '1000px',
            scrollCollapse: true,

        });

        $('.show_confirm').click(function(e) {
            if(!confirm('Está seguro que desea eliminar este formulario?')) {
                e.preventDefault();
            }
            else
            {
                document.getElementById('frm-del').submit();
            }
        });
    } );
</script>
@endsection