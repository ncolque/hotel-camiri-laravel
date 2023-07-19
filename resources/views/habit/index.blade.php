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
                <div class="col-md-12">

                    @if (session('info'))
                        <div class="alert alert-{{ session('info.afirmacion') }}">
                            {{ session('info.mensaje') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Table</h3>
                            <a class="btn btn-success btn-sm float-right" href="{{ route('habitacions.create') }}">Crear
                                Habitación</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>NUMERO</th>
                                        <th>CATEGORIA</th>
                                        <th>DETALLE</th>
                                        <th>PRECIO</th>
                                        <th>ESTADO</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registros as $reg)
                                        <tr>
                                            <td>{{ $reg->id }}</td>
                                            <td>{{ $reg->numero }}</td>
                                            <td>{{ $reg->categoria }}</td>
                                            <td>{{ $reg->detalle }}</td>
                                            <td>{{ $reg->precio }}</td>
                                            <td>
                                                @if ($reg->estado == 'Disponible')
                                                <span class="badge badge-success">{{ $reg->estado }}</span>   
                                                @endif
                                                @if ($reg->estado == 'Ocupado')
                                                <span class="badge badge-danger">{{ $reg->estado }}</span>    
                                                @endif
                                                @if ($reg->estado == 'Limpieza')
                                                <span class="badge badge-info">{{ $reg->estado }}</span>    
                                                @endif
                                                @if ($reg->estado == 'Mantenimiento')
                                                <span class="badge badge-warning">{{ $reg->estado }}</span>    
                                                @endif
                                            </td>
                                            <td class="project-actions text-left">
                                                {{-- <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-eye"></i>
                                </a> --}}
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('habitacions.edit', $reg->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('habitacions.destroy', $reg->id) }}" method="post"
                                                    style="display: inline">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{-- {{ $users->links() }} --}}
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
