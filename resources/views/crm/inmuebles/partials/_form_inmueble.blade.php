<div class="row m-t-10">

    <div class="col-sm-8 col-md-3 col-lg-3">
        <div class="form-group form-float m-b-0">
            <div class="form-line focused">
                <input type="text" class="form-control m-t-5 " name="name"  value="{{  old('name') }}" required oninvalid="El" maxlength="100" />
                <input type="hidden" class="form-control " name="clase" value="{{$clase_proyecto}}"  maxlength="100" />
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
                    <option value="disponible">Disponible</option>
                    <option value="contruccion">Construcción</option>
                    <option value="contrato">Contrato</option>
                    <option value="vendido">Vendido</option>
                </select>
                <label class="form-label m-t--5">Estado</label>
            </div>
        </div>
    </div>
    <div class="col-sm- col-md-3 col-lg-3">
        <div class="form-group form-float m-b-0  m-t-5">
            <div class="form-line focused">
                <input type="text" class="form-control " name="codigo_referencia" value="{{ old('codigo_referencia')}}" required maxlength="100" />
                <label class="form-label  m-t--5">Código de ref. Bancaria</label>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
        <div class="form-group form-float">
            <div class="form-line focused">
                <select class="btn-group bootstrap-select form-control show-tick m-t-5"
                        data-live-search="true" name="tipo_id" id="clase">
                    @foreach($tipos_propiedades as $tipo)
                        <option value="{{$tipo->id}}">{{$tipo->name}}</option>
                    @endforeach
                </select>
                <label class="form-label m-t--5">Tipo de Propiedad</label>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
        <div class="form-group form-float">
            <div class="form-line focused">
                <select class="btn-group bootstrap-select form-control show-tick m-t-5"
                        data-live-search="true" name="estado_comercial" id="clase">
                    <option value="" selected disabled>Elija una opción</option>
                    <option value="venta">Venta</option>
                    <option value="alquiler">Alquiler</option>
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
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
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
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <label class="form-label m-t--5">Baños</label>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="form-group form-float m-b-0  m-t-5">
            <div class="form-line focused">
                <input type="number" class="form-control " name="area" required value="{{ old('area')}}" maxlength="100" />
                <label class="form-label  m-t--5">Area de construcción</label>
            </div>
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-sm-4 col-md-2 col-lg-2">
        <div class="form-group form-float">
            <div class="form-line focused">
                <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="moneda" id="clase">
                    <option value="RD">DOP</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                </select>
                <label class="form-label m-t--5">Moneda</label>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-3">
        <div class="form-group form-float">
            <div class="form-line focused">
                <input type="number" class="form-control validate" required name="monto" required >
                <label class="form-label">Precio</label>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3">
        <div class="form-group form-float">
            <div class="form-line focused">
                <input type="number" class="form-control validate" required name="monto_oferta" required >
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
            <div class="form-line focused">
                {{--<input type="text" class="form-control" name="descripcion" value="{{ old('descripcion')}}"  maxlength="100" />--}}
                <textarea rows="1" name="descripcion" id="annotations" class="form-control no-resize auto-growth" required placeholder="Escribe una descripción">{{ old('descripcion')}}</textarea>


            </div>
        </div>
    </div>
</div>
<div class="row ">

    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="form-group form-float m-b-0 ">
            <div class="form-line focused">
                <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="provincia_id" id="provincia_id">
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

                <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="municipio_id" id="municipio_id">
                    <option value="" selected disabled>Elija una opción</option>
                </select>

                <label class="form-label m-t--5">Municipio</label>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="form-group form-float m-b-0 ">
            <div class="form-line focused">

                <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="sector_id" id="sector_id">
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
                <div class="form-line {{ old('direccion') ? 'focused':'' }}">
                    <input type="text" class="form-control" name="direccion" value="{{ old('direccion')}}"  maxlength="100" />
                    <label class="form-label">Dirección</label>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-group form-float m-b-0">
                <div class="form-line {{ old('direccion') ? 'focused':'' }}">
                    <input type="text" class="form-control" name="mapa_url" value="{{ old('mapa_url')}}"  maxlength="590" />
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
        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Crear Propiedad</button>
    </div>


</div>

<span id="atributos_propiedad_pre" data-atributos='@json($tipos_atributos)' ></span>

<script src="{{ asset('plugins/bootstrap-fileinput/js/fileinput.js') }}"></script>
<link href="{{ asset('plugins/bootstrap-fileinput/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css">