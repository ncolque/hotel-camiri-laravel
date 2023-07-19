@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Habitaciones')

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
                        <form @if ($reg->id)
                            action="{{ route('habitacions.update', $reg->id) }}"
                        @else action="{{ route('habitacions.store') }}" @endif method="POST"
                            enctype="multipart/form-data">
                            @csrf @if ($reg->id) @method('PUT') @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Numero</label>
                                    <input type="number" name="numero" value="{{ old('numero', $reg->numero) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select class="form-control" name="categoria" required>
                                        <option value=""></option>
                                        <option value="Personal">Personal</option>
                                        <option value="Matrimonial">Matrimonial</option>
                                        <option value="Doble">Doble</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Detalle</label>
                                    <input type="text" name="detalle" value="{{ old('detalle', $reg->detalle) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Precio</label>
                                    <input type="number" name="precio" value="{{ old('precio', $reg->precio) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select class="form-control" name="estado" required>
                                        <option value=""></option>
                                        <option value="Disponible">Disponible</option>
                                        <option value="Ocupado">Ocupado</option>
                                        <option value="Limpieza">Limpieza</option>
                                        <option value="Mantenimiento">Mantenimiento</option>
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
                                <a class="btn btn-secondary" href="{{ route('habitacions.index') }}">Cancelar</a>
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
