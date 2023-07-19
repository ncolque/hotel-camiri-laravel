@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Servicios')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card {{ $reg->id ? 'card-primary' : 'card-success' }}">
                        <div class="card-header">
                            <h3 class="card-title">Nuevo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form
                            @if ($reg->id) action="{{ route('servicios.update', $reg->id) }}"
                        @else action="{{ route('servicios.store') }}" @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" value="{{ old('nombre', $reg->nombre) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <input type="text" name="descripcion"
                                        value="{{ old('descripcion', $reg->descripcion) }}" class="form-control"
                                        placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Precio</label>
                                    <input type="number" name="precio" value="{{ old('precio', $reg->precio) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" name="fecha" value="{{ old('fecha', $reg->fecha) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Promoción</label>
                                    <select class="form-control" name="promocion_id" required>
                                        @foreach ($promos as $prom)
                                        <option value="{{$prom->id}}">{{$prom->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="form-control" name="cliente_id" required>
                                        @foreach ($clients as $clie)
                                        <option value="{{$clie->id}}">{{$clie->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Materiales</label>
                                    @foreach ($mats as $mat)
                                        <div class="form-check">
                                            <input type="checkbox" name="materials[]" value="{{ $mat->id }}"
                                                class="form-check-input" id="{{ $mat->id }}">
                                            <label class="form-check-label"
                                                for="{{ $mat->id }}">{{ $mat->nom }}</label>
                                        </div>
                                    @endforeach
                                </div> --}}

                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('servicios.index') }}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
