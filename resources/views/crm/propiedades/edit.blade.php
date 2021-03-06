@extends('crm.layouts.base_crm')

@section('title', 'Propiedad')

@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection


@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection


@section('contenido_inmobiliaria')
   <div class="card">
       <div class="header">
       <h2><i class="material-icons">add</i>Editar Propiedad</h2>
       </div>

       @if ($errors->any())
           <div class="alert alert-danger alert-dismissible fade in" role="alert">
               <ul>
                   @foreach ($errors->all() as $error)

                       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif

       <div class="body">

               {!! Form::open(['route' => ['propiedades.update', $propiedad->id], 'method' => 'put' , 'id' => 'inmueble_form','enctype' => 'multipart/form-data']) !!}
                    <div class="row m-t-10">

                        <div class="col-sm-8 col-md-6 col-lg-6">
                            <div class="form-group form-float m-b-0">
                                <div class="form-line focused">
                                    <input type="text" class="form-control m-t-5 " name="name"  value="{{$propiedad->name}}" required oninvalid="El" maxlength="100" />
                                    <input type="hidden" class="form-control " name="clase" value="propiedad"  maxlength="100" />
                                    <input type="hidden" class="form-control " name="slug" value="empty"  maxlength="100" />
                                    <label class="form-label m-t--5">Nombre</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8 col-md-2 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select  class="form-control  btn-group bootstrap-select show-tick m-t-5" data-live-search="true"   value="{{  old('estado') }}" name="estado" id="estado">
                                        <option value="" selected disabled>Elija una opción</option>
                                        <option value="disponible" {{$propiedad->estado == 'disponible' ? 'selected' : ''}}>Disponible</option>
                                        <option value="contruccion" {{$propiedad->estado == 'construccion' ? 'selected' : ''}}>Construcción</option>
                                        <option value="contrato" {{$propiedad->estado == 'contrato' ? 'selected' : ''}} >Contrato</option>
                                        <option value="vendido" {{$propiedad->estado == 'vendido' ? 'selected' : ''}} >Vendido</option>
                                    </select>
                                    <label class="form-label m-t--5">Estado</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick m-t-5"
                                            data-live-search="true" name="estado_comercial" id="clase">
                                        <option value="" selected disabled>Elija una opción</option>
                                        <option value="venta" {{$propiedad->estado_comercial == 'venta' ? 'selected' : ''}}>Venta</option>
                                        <option value="alquiler" {{$propiedad->estado_comercial == 'alquiler' ? 'selected' : ''}}>Alquiler</option>
                                    </select>
                                    <label class="form-label m-t--5">Estado Comercial</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick m-t-5"
                                            data-live-search="true" name="habitaciones" id="clase">
                                        <option value="" selected disabled>Elija una opción</option>
                                        <option value="0" {{$propiedad->habitaciones == '0' ? 'selected' : ''}}>0</option>
                                        <option value="1" {{$propiedad->habitaciones == '1' ? 'selected' : ''}}>1</option>
                                        <option value="2" {{$propiedad->habitaciones == '2' ? 'selected' : ''}}>2</option>
                                        <option value="3" {{$propiedad->habitaciones == '3' ? 'selected' : ''}}>3</option>
                                        <option value="4" {{$propiedad->habitaciones == '4' ? 'selected' : ''}}>4</option>
                                        <option value="5" {{$propiedad->habitaciones == '5' ? 'selected' : ''}}>5</option>
                                        <option value="6" {{$propiedad->habitaciones == '6' ? 'selected' : ''}}>6</option>
                                        <option value="7" {{$propiedad->habitaciones == '7' ? 'selected' : ''}}>7</option>
                                        <option value="8" {{$propiedad->habitaciones == '8' ? 'selected' : ''}}>8</option>
                                        <option value="9" {{$propiedad->habitaciones == '9' ? 'selected' : ''}}>9</option>
                                    </select>
                                    <label class="form-label m-t--5">Habitaciones</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick m-t-5"
                                            data-live-search="true" name="banos" id="clase">
                                        <option value="" selected disabled>Elija una opción</option>
                                        <option value="0" {{$propiedad->banos == '0' ? 'selected' : ''}}>0</option>
                                        <option value="1" {{$propiedad->banos == '0' ? 'selected' : ''}}>1</option>
                                        <option value="2" {{$propiedad->banos == '0' ? 'selected' : ''}}>2</option>
                                        <option value="3" {{$propiedad->banos == '0' ? 'selected' : ''}}>3</option>
                                        <option value="4" {{$propiedad->banos == '0' ? 'selected' : ''}}>4</option>
                                        <option value="5" {{$propiedad->banos == '0' ? 'selected' : ''}}>5</option>
                                        <option value="6" {{$propiedad->banos == '0' ? 'selected' : ''}}>6</option>
                                        <option value="7" {{$propiedad->banos == '0' ? 'selected' : ''}}>7</option>
                                        <option value="8" {{$propiedad->banos == '0' ? 'selected' : ''}}>8</option>
                                        <option value="9" {{$propiedad->banos == '0' ? 'selected' : ''}}>9</option>
                                    </select>
                                    <label class="form-label m-t--5">Baños</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group form-float m-b-0  m-t-5">
                                <div class="form-line focused">
                                    <input type="number" class="form-control " name="area" required value="{{$propiedad->area}}" maxlength="100" />
                                    <label class="form-label  m-t--5">Area de construcción</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm- col-md-3 col-lg-3">
                            <div class="form-group form-float m-b-0  m-t-5">
                                <div class="form-line focused">
                                    <input type="text" class="form-control " name="codigo_referencia" value="{{$propiedad->codigo_referencia}}" required maxlength="100" />
                                    <label class="form-label  m-t--5">Código de ref. Bancaria</label>
                                </div>
                            </div>
                        </div>

                    
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-2 col-lg-2">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="moneda" id="clase">
                                        <option value="RD" {{$propiedad->moneda == 'RD' ? 'selected' : ''}} >DOP</option>
                                        <option value="USD" {{$propiedad->moneda == 'USD' ? 'selected' : ''}} >USD</option>
                                        <option value="EUR" {{$propiedad->moneda == 'EUR' ? 'selected' : ''}}>EUR</option>
                                    </select>
                                    <label class="form-label m-t--5">Moneda</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <input type="number" class="form-control validate" required name="monto" value="{{$propiedad->monto}}" required >
                                    <label class="form-label">Precio</label>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <input type="number" class="form-control validate" required name="monto_oferta" value="{{$propiedad->monto_oferta}}" required >
                                    <label class="form-label">Precio Oferta</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="tipo_oferta" id="clase">
                                        <option value="exclusiva">Exclusiva</option>
                                        <option value="normal">Sin Oferta</option>
                                    </select>
                                    <label class="form-label m-t--5">Tipo Oferta</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="vendido" id="vendido">
                                        <option value="0" {{($propiedad->vendido == '0') ? 'selected' : ''}} >No</option>
                                        <option value="1" {{($propiedad->vendido == '1') ? 'selected' : ''}}>Si</option>
                                    </select>
                                    <label class="form-label m-t--5">Vendido</label>
                                </div>
                            </div>
                        </div>
                    

                        {{-- <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true"  id="clase">
                                        <option value="proyecto">Exclusiva</option>
                                        <option value="propiedad">Propiedad</option>
                                    </select>
                                    <label class="form-label m-t--5">Nombre Plantillarta</label>

                                </div>
                            </div>
                        </div> --}}
                        <div class="col-sm-4 col-md-12 col-lg-12">
                            <div class="form-group form-float m-b-15">
                                <label class="form-label">Descripción</label>
                                <div class="form-line {{ old('descripcion') ? 'focused':'' }}">
                                    {{--<input type="text" class="form-control" name="descripcion" value="{{ old('descripcion')}}"  maxlength="100" />--}}
                                    <textarea rows="1" name="descripcion" id="annotations" class="form-control no-resize auto-growth" required placeholder="Escribe una descripción">{{$propiedad->descripcion}}</textarea>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group form-float m-b-0 ">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="provincia_id" id="provincia_id">
                                        <option value="" selected disabled>Elija una opción</option>
                                        @foreach($provincias as $provincia)
                                        <option value="{{ $provincia->provincia_id }}">{{ Str::upper($provincia->provincia) }}</option>
                                        @endforeach
                                    </select>
                                    <label class="form-label m-t--5">Provincia</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group form-float m-b-0 ">
                                <div class="form-line focused">

                                    <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="municipio_id" id="municipio_id">
                                        <option value="" selected disabled>Elija una opción</option>
                                    </select>

                                    <label class="form-label m-t--5">Municipio</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group form-float m-b-0 ">
                                <div class="form-line focused">

                                    <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="sector_id" id="sector_id">
                                        <option value="" selected disabled>Elija una opción</option>
                                    </select>

                                    <label class="form-label m-t--5">Sector</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-float m-b-0">
                                    <div class="form-line focused">
                                        <input type="text" class="form-control" name="direccion" value="{{$propiedad->direccion}}"  maxlength="100" />
                                        <label class="form-label">Dirección</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-float m-b-0">
                                    <div class="form-line focused">
                                        <input type="text" class="form-control" name="mapa_url" value="{{$propiedad->mapa_url}}"  maxlength="300" />
                                        <label class="form-label">Google Maps Url</label>
                                    </div>
                                </div>
                            </div>
                            <div class="" style="padding: 15px 20px 5px 20px;">
                                <div id="" class="list-unstyled row clearfix">
                                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-15">
                                        <div class="form-group form-float m-b-0">
                                            <div class="file-loading">
                                                <input id="archivos_salones"  name="path[]" class="file" type="file" data-preview-file-type="text"
                                                    accept=".png,.jpg,.jpeg,.pdf" multiple>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-sm-12 col-md-12">
                                <h2 class="card-inside-title">Tipo Propiedad</h2>
                                <div class="demo-checkbox">

                                    @foreach($tipos_propiedades as $tipo_propiedad)
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group form-float m-b-0">
                                                <input  type="checkbox" name="tipos_propiedad[]" id="{{ $tipo_propiedad->id }}" value="{{ $tipo_propiedad->id }}"/>
                                                <label for="{{ $tipo_propiedad->id }}">{{ $tipo_propiedad->name }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div> --}}

                        {{-- <div class="col-sm-12 col-md-12">
                            <h2 class="card-inside-title">Comodidades</h2>
                            <div class="demo-checkbox">

                                @foreach($tipos_caracteristicas as $caracteristicas)
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group form-float m-b-0">
                                            <input  type="checkbox" name="tipos_caracteristicas[]" id="{{ $caracteristicas->nombre_tipo . $caracteristicas->id }}" value="{{ $caracteristicas->id }}"/>
                                            <label for="{{ $caracteristicas->nombre_tipo . $caracteristicas->id  }}">{{ $caracteristicas->nombre_tipo }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> --}}


                    </div>

                    {{-- @include('crm.inmuebles.partials.atributos_pro',['atributo' => ['modo' => 'creacion','data' => null]]) --}}

                    {{-- <div class="row">

                        <div class="col-sm-8 col-md-12">
                            <h2 class="card-inside-title">Galeria Propiedad</h2>
                            <div class="file-loading">
                                <input id="garleria_propiedad" name="garleria_propiedad[]" class="file" type="file" data-preview-file-type="text" accept="image/*" multiple>
                            </div>
                        </div>
                    </div> --}}


                    <div class="row">


                        <div class="col-xs-12 align-center">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar</button>
                        </div>


                    </div>

                    {!! Form::close() !!}
                </div>

            </div>
         @endsection

         @section('pages_css_files')
         <link href="{{ asset('plugins/materialize-stepper/css/mstepper.css') }}" rel="stylesheet">
         <link href="{{ asset('plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">
     
         <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
         <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
         <link href="{{ asset('plugins/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
     
         <link href="{{ asset('plugins/bootstrap-fileinput/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css">
     
     @stop
     
     
     
     @section('pages_js_files')
     
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
     
         <script src="{{ asset('plugins/jquery-select2/js/select2.min.js') }}"></script>
         <script src="{{ asset('plugins/jquery-sheepIt/jquery.sheepItPlugin.js') }}"></script>
         <script src="{{ asset('plugins/jquery-maskMoney/jquery.maskMoney.js') }}"></script>
         <script src="{{ asset('plugins/jquery-maskMoney/jquery.region.maskMoney.js') }}"></script>
         <script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
     
         <script src="{{ asset('plugins/autosize/autosize.js') }}"></script>
         <script src="{{ asset('js/src/proyectos.js') }}"></script>
         <script src="{{ asset('js/src/inmueble.js') }}"></script>
         <script>
             $(document).on('ready', function() {
                 $("#garleria_propiedad").fileinput({'showUpload':false, 'previewFileType':'jpeg,jpg,png'});
             });
         </script>
     
     @stop