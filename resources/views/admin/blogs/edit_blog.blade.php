@extends('admin.admin_master')
@section('admin')

    {{-- Jquery CDN Para poder usar JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- CSS en vista, se usa para los tags --}}
    <style type="text/css">
        .bootstrap-tagsinput .tag{
            margin-right: 2px;
            color: #b70000;
            font-weight: 700px;
        } 
    </style>
    

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Editar <strong>Blog</strong></h4>
                        <div class="page-title-right">

                            <a href="{{ route('all.blog') }}" class="btn btn-success waves-effect waves-light"><i
                                    class="dripicons-return"></i> Regresar a Lista de Blogs</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                {{-- Columna 1 --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Editar Blog</h4>
                            <br>

                            <form method="POST" action="{{ route('store.blog') }}" enctype="multipart/form-data">
                                @csrf

                                {{-- ID --}}
                                <input type="hidden" name="id" value="{{ $blog->id }}">

                                {{-- Nombre Categoría --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Seleccionar Categoría</label>
                                    <div class="col-sm-10">
                                        <select name="blog_category_id" class="form-select">
                                            <option selected disabled>Seleccionar Categoría</option>
                                            @foreach ($blogCategories as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == $blog->blog_category_id ? 'selected' : '' }}>{{ $item->blog_category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- Titulo Blog --}}
                                <div class="row mb-3">
                                    <label for="blog_title" class="col-sm-2 col-form-label">Titulo del Blog</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_title" type="text" value="{{ $blog->blog_title }}">
                                    </div>
                                </div>

                                {{-- Tags --}}
                                <div class="row mb-3">
                                    <label for="blog_tags" class="col-sm-2 col-form-label">Tags</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_tags" type="text" value="{{ $blog->blog_tags }}" data-role="tagsinput">
                                    </div>
                                </div>

                                {{-- Descripción del Blog --}}
                                <div class="row mb-3">
                                    <label for="blog_description" class="col-sm-2 col-form-label">Descripción
                                        del Blog</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="blog_description">{{ $blog->blog_description }}</textarea>
                                    </div>
                                </div>


                                {{-- Imagen del Blog --}}
                                <div class="row mb-3">
                                    <label for="blog_image" class="col-sm-2 col-form-label">Seleccionar Imagen del
                                        Blog</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_image" type="file" id="image">
                                    </div>
                                </div>

                                {{-- Display Image --}}
                                <div class="row mb-3">
                                    <label for="showImage" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                        <img id="showImage" class="rounded avatar-lg" src="{{ asset($blog->blog_image) }}"
                                            data-holder-rendered="true">

                                    </div>
                                </div>


                                {{-- Botón Actualizar --}}
                                <div class="row mb-3">
                                    <label for="portfolio_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                        <button type="submit" class="btn btn-primary waves-effect waves-light"><i
                                                class="ri-save-3-line"></i> Actualizar Blog</button>

                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>


    {{-- JS para el manejo de imagenes --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection
