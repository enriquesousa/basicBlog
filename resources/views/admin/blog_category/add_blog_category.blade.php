@extends('admin.admin_master')
@section('admin')

    {{-- Jquery CDN Para poder usar JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Agregar <strong>Categoría del Blog</strong></h4>
                        <div class="page-title-right">

                            <a href="{{ route('all.blog.category') }}" class="btn btn-success waves-effect waves-light"><i class="dripicons-return"></i> Regresar a Lista de Categorías</a>

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

                            <h4 class="card-title">Agregar Categoría</h4>
                            <br>

                            <form method="POST" action="{{ route('store.blog.category') }}" enctype="multipart/form-data">
                                @csrf


                                {{-- Nombre Categoría --}}
                                <div class="row mb-3">
                                    <label for="blog_category" class="col-sm-2 col-form-label">Nombre Categoría</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_category" type="text" autofocus>
                                        @error('blog_category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                {{-- Botón Crear Categoría --}}
                                <div class="row mb-3">
                                    <label for="portfolio_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="ri-save-3-line"></i> Agregar Categoría</button>
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
