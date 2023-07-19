@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Promoción')

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
                            action="{{ route('promocions.update', $reg->id) }}"
                        @else action="{{ route('promocions.store') }}" @endif method="POST"
                            enctype="multipart/form-data">
                            @csrf @if ($reg->id) @method('PUT') @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" value="{{ old('nombre', $reg->nombre) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Detalle</label>
                                    <textarea rows="3" name="descripcion" value="{{ old('descripcion', $reg->descripcion) }}"
                                        class="form-control" placeholder="Enter ..." required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Descuento</label>
                                    <input type="number" name="descuento" value="{{ old('descuento', $reg->descuento) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('promocions.index') }}">Cancelar</a>
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
