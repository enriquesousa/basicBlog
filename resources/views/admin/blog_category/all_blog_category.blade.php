@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Lista <strong>Categorías del Blog</strong></h4>

                        <div class="page-title-right">
                            {{-- <a href="{{ route('add.blog.category') }}" class="btn btn-success waves-effect waves-light"><i class="fas fa-plus-circle"></i> Agregar Categoría"></a> --}}
                            <a href="#" class="btn btn-success waves-effect waves-light"><i class="fas fa-plus-circle"></i> Agregar Categoría</a>
                        </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Lista <strong>Categorías del Blog</strong></h4>
                            <p class="card-title-desc">Lista de categorías del <code>blog</code> para el frontend.</p>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Serie</th>
                                        <th>Categoría</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    @php($i = 1)
                                    @foreach ($blogCategories as $item)
                                        <tr>

                                            {{-- Serie --}}
                                            <td>{{ $i++ }}</td>

                                            {{-- Categoría --}}
                                            <td>{{ $item->blog_category }}</td>

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
