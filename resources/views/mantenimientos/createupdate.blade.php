@extends('layouts.app')

@section('title', 'Mantenimiento')

@section('css')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" defer/>
    <style>
        .btn:hover{
            opacity:0.8;
        }
        fieldset {
            border-radius: 4px;
        }

        legend {
            border-radius: 4px;
            color:  #fff;
            font-size: 16px;
            
            padding: 3px 5px 3px 7px;
            width: auto;
        }

        .select-2{
            width: 100%;
            max-width: 100% !important;            
        }

        .select2-container .select2-selection--single {
            height: 40px !important;

        }
        .select2-selection__arrow {
            height: 40px !important;
        }
        .btn{
            border: solid 1px #fff;
        }
        
        .input_fecha {
            position: relative;
            color: white;
        }

        .input_fecha:before {
            position: absolute;
            content: attr(data-date);
            display: inline-block;
            color: black;
        }

        .input_fecha::-webkit-datetime-edit,
        .input_fecha::-webkit-inner-spin-button,
        .input_fecha::-webkit-clear-button {
            display: none;
        }

        .input_fecha::-webkit-calendar-picker-indicator {
            position: absolute;
            right: 0;
            color: black;
            opacity: 1;
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-center"><h3 class="text-white">{{is_null($mantenimiento->getKey()) ? 'Nuevo Mantenimiento' : 'Mantenimiento No. '.$mantenimiento->getKey()}}</h3></div>
                    <div class="card-body bg-light" >

                        <form id="form" class="form" method="post" action="{{is_null($mantenimiento->getKey()) ? route('mantenimiento.store') : route('mantenimiento.update', ['mantenimiento' => $mantenimiento])}}" enctype="multipart/form-data">
                            @csrf
                            @if ($mantenimiento->getKey())
                                {{ method_field('PATCH') }}
                            @endif   
                            <fieldset class="px-3 my-3 bg-light" >
                                <legend class="bg-primary">Datos del Formulario</legend>        
                                <div class="row">     
                                    <div class="col-md-6">   

                                        <div class="form-group">
                                            <label class=" font-weight-bold">Nombre del Propietario</label>
                                            <input type="text" class="form-control " name="nombre_propietario" value="{{ old('nombre_propietario', $mantenimiento->nombre_propietario)}}">
                                        </div>   

                                        <div class="form-group">
                                            <label class=" font-weight-bold">Modelo Vehículo</label>
                                            <input type="text" class="form-control " name="modelo_vehiculo" value="{{ old('modelo_vehiculo', $mantenimiento->modelo_vehiculo)}}">
                                        </div>   

                                        <div class="form-group">
                                            <label class=" font-weight-bold">Número de Chasis</label>
                                            <input type="text" class="form-control " name="numero_chasis" value="{{ old('numero_chasis', $mantenimiento->numero_chasis)}}">
                                        </div>                                           

                                        <div class="form-group">
                                            <label for="fecha" class="font-weight-bold">Fecha de Salida</label>
                                            <input type="hidden" id="timezone" name="timezone" value="{{Config::get('app.timezone')}}">
                                            <input class="form-control input_fecha" type="datetime-local" name="fecha_salida" value="{{old('fecha_salida', $mantenimiento->fecha_salida ? strftime('%Y-%m-%dT%H:%M:%S', strtotime($mantenimiento->fecha_salida)) : date('d-m-Y H:i:s') )}}" tabindex="1" data-date="" data-date-format="DD/MM/YYYY hh:mm A" required>  
                                        </div>  

                                        <div class="form-group">
                                            <label class="font-weight-bold">Estado</label>
                                            <select class="form-control select-2" name="estado" data-width="100%" required>
                                                <option value = "Entrada" >Entrada</option>
                                                <option value = "En Proceso" >En Proceso</option>
                                                <option value = "Finalizado" >Finalizado</option>
                                            </select>   
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" font-weight-bold">Marca del Vehículo</label>
                                            <input type="text" class="form-control " name="marca_vehiculo" value="{{ old('marca_vehiculo', $mantenimiento->marca_vehiculo)}}">
                                        </div>    
                                        
                                        <div class="form-group">
                                            <label for="fecha" class="font-weight-bold">Fecha de Entrada</label>
                                            <input type="hidden" name="timezone2" value="{{Config::get('app.timezone')}}">
                                            <input class="form-control input_fecha" type="datetime-local" name="fecha_entrada" value="{{old('fecha_entrada', $mantenimiento->fecha_entrada ? strftime('%Y-%m-%dT%H:%M:%S', strtotime($mantenimiento->fecha_entrada)) : date('d-m-Y H:i:s') )}}" data-date="" data-date-format="DD/MM/YYYY hh:mm A" required>  
                                        </div>  

                                        <div class="form-group">
                                            <label class=" font-weight-bold">Trabajo Realizado</label>
                                            <textarea type="text" class="form-control " name="trabajo" rows="2" >{{ old('trabajo', $mantenimiento->trabajo)}}</textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class=" font-weight-bold">Costo Mano de Obra</label>
                                            <input type="number" class="form-control " min=0 name="mano_obra" value="{{ old('mano_obra', $mantenimiento->mano_obra)}}">
                                        </div>   
                                    </div>
                                </div>
                            </fieldset>

                            <div class="row my-2">
                                <div class="col">
                                    <button type="submit" name="btnSave" class="btn bg-primary text-white float-right"><span class="fa fa-save" ></span> Guardar y continuar</button>
                                    &nbsp;
                                    <a href="{{route('mantenimiento.index')}}" class="btn btn-danger float-right mx-2"><span class="fa fa-undo" ></span> Cancelar</a>
                                </div>
                            </div>   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/select2.min.js')}}" defer></script>
    <script src="{{asset('js/select2-lang-es.js')}}"defer ></script>  
    <script src="{{asset('js/moment.js')}}"></script>
    <script>
        $(document).ready(function() {

            $("#form").on("keypress", function (event) {
                var keyPressed = event.keyCode || event.which;
                if (keyPressed === 13) {
                    event.preventDefault();
                    return false;
                }
            });

            $('.select-2').select2({
                language: "es",              
            });

            
            $(".input_fecha").on("change", function() {
                this.setAttribute(
                    "data-date",
                    moment(this.value, "YYYY-MM-DD hh:mm")
                    .format( this.getAttribute("data-date-format") )
                )
            }).trigger("change")
            
        });        
    </script>
@endsection