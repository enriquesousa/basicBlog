@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Lista <strong>Portafolios</strong></h4>

                        <div class="page-title-right">
                            <a href="{{ route('add.portfolio') }}" class="btn btn-success waves-effect waves-light"><i class="fas fa-plus-circle"></i> Agregar Portafolio</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Lista datos del <strong>Portafolio</strong></h4>
                            <p class="card-title-desc">Lista datos del <code>portafolio</code> en el frontend.</p>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Serie</th>
                                        <th>Nombre</th>
                                        <th>Titulo</th>
                                        <th>Imagen</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    @php($i = 1)
                                    @foreach ($portfolios as $item)
                                        <tr>

                                            {{-- Serie --}}
                                            <td>{{ $i++ }}</td>

                                            {{-- Nombre --}}
                                            <td>{{ $item->portfolio_name }}</td>

                                            {{-- Titulo --}}
                                            <td>{{ $item->portfolio_title }}</td>

                                            <td><img src="{{ asset($item->portfolio_image) }}" style="width: 60px; height: 50px;"></td>

                                            <td>

                                                {{-- Edit --}}
                                                <a href="{{ route('edit.portfolio', $item->id) }}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                
                                                {{-- Delete --}}
                                                <a href="{{ route('delete.portfolio', $item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i></a>

                                            </td>
                                            
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
