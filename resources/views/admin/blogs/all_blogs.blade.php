@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Lista <strong>Blogs</strong></h4>

                        <div class="page-title-right">
                            <a href="{{ route('add.blog') }}" class="btn btn-success waves-effect waves-light"><i
                                    class="fas fa-plus-circle"></i> Agregar Blog</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Lista todos los <strong>Blogs</strong></h4>
                            <p class="card-title-desc">Lista datos del la tabla de <code>blogs</code>.</p>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Serie</th>
                                        <th>Categoría</th>
                                        <th>Titulo</th>
                                        <th>Tags</th>
                                        <th>Imagen</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    @php($i = 1)
                                    @foreach ($blogs as $item)
                                        <tr>

                                            {{-- Serie --}}
                                            <td>{{ $i++ }}</td>

                                            {{-- Categoría --}}
                                            <td>{{ $item->category->blog_category }}</td>

                                            {{-- Titulo --}}
                                            <td>{{ $item->blog_title }}</td>

                                            {{-- Tags --}}
                                            <td>{{ $item->blog_tags }}</td>

                                            {{-- Imagen --}}
                                            <td>
                                                <img src="{{ asset($item->blog_image) }}"
                                                    style="width: 60px; height: 50px;">
                                            </td>

                                            {{-- Acción --}}
                                            <td>

                                                {{-- Edit --}}
                                                <a href="{{ route('edit.blog', $item->id) }}"
                                                    class="btn btn-info sm" title="Editar"><i
                                                        class="fas fa-edit"></i></a>

                                                {{-- Delete --}}
                                                <a href="{{ route('delete.blog', $item->id) }}"
                                                    class="btn btn-danger sm" title="Eliminar" id="delete"><i
                                                        class="fas fa-trash-alt"></i></a>

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
