@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Multi Imágenes para el <strong>About Page</strong></h4>

                        <div class="page-title-right">
                            {{-- <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Data Tables</li>
                        </ol> --}}
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Multi Imágenes</h4>
                            <p class="card-title-desc">Lista de todas las Multi Imágenes que se mostraran en la sección de <code>About</code> en el Frontend.
                            </p>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Serie</th>
                                        <th>Imágenes</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    @php($i = 1)
                                    @foreach ($allMultiImage as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td><img src="{{ asset($item->multi_image) }}" style="width: 50px; height: 50px;"></td>
                                            <td>
                                                {{-- Edit --}}
                                                <a href="{{ route('multi.image.edit', $item->id) }}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                
                                                {{-- Delete --}}
                                                {{-- <a href="{{ route('multi.image.delete', $item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i></a> --}}
                                                <a href="#" class="btn btn-danger sm" title="Eliminar Data" id="delete"><i class="fas fa-trash-alt"></i></a>
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
