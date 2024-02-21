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
                        <h4 class="mb-sm-0">Agregar <strong>Blog</strong></h4>
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

                            <h4 class="card-title">Agregar Blog</h4>

                            <form method="POST" action="{{ route('store.portfolio') }}" enctype="multipart/form-data">
                                @csrf


                                {{-- Nombre Categoría --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Seleccionar Categoría</label>
                                    <div class="col-sm-10">
                                        <select name="blog_category_id" class="form-select">
                                            <option selected disabled>Seleccionar Categoría</option>
                                            @foreach ($blogCategories as $item)
                                                <option value="{{ $item->id }}">{{ $item->blog_category }}</option>
                                            @endforeach
                                        </select>
                                        @error('blog_category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Titulo Blog --}}
                                <div class="row mb-3">
                                    <label for="blog_title" class="col-sm-2 col-form-label">Titulo del Blog</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_title" type="text">
                                        @error('blog_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Tags --}}
                                <div class="row mb-3">
                                    <label for="blog_tags" class="col-sm-2 col-form-label">Tags</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_tags" type="text" value="home, blog, tech" data-role="tagsinput">
                                    </div>
                                </div>

                                {{-- Descripción del Blog --}}
                                <div class="row mb-3">
                                    <label for="blog_description" class="col-sm-2 col-form-label">Descripción
                                        Portafolio</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="blog_description"></textarea>
                                    </div>
                                </div>


                                {{-- Imagen del Blog --}}
                                <div class="row mb-3">
                                    <label for="blog_image" class="col-sm-2 col-form-label">Seleccionar Imagen del
                                        Blog</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_image" type="file" id="image">
                                        @error('blog_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Display Image --}}
                                <div class="row mb-3">
                                    <label for="showImage" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                        <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}"
                                            data-holder-rendered="true">

                                    </div>
                                </div>


                                {{-- Botón Actualizar --}}
                                <div class="row mb-3">
                                    <label for="portfolio_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                        <button type="submit" class="btn btn-primary waves-effect waves-light"><i
                                                class="ri-save-3-line"></i> Guardar Blog</button>

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
