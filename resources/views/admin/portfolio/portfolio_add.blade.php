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
                        <h4 class="mb-sm-0">Agregar <strong>Portafolio</strong></h4>
                        <div class="page-title-right">

                            <a href="{{ route('all.portfolio') }}" class="btn btn-success waves-effect waves-light"><i class="dripicons-return"></i> Regresar a Lista de Portafolios</a>

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

                            <h4 class="card-title">Agregar Portafolio</h4>

                            <form method="POST" action="{{ route('store.portfolio') }}" enctype="multipart/form-data">
                                @csrf


                                {{-- Nombre Portafolio --}}
                                <div class="row mb-3">
                                    <label for="portfolio_name" class="col-sm-2 col-form-label">Nombre Portafolio</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="portfolio_name" type="text">
                                        @error('portfolio_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Titulo Portafolio --}}
                                <div class="row mb-3">
                                    <label for="portfolio_title" class="col-sm-2 col-form-label">Titulo Portafolio</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="portfolio_title" type="text">
                                        @error('portfolio_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Descripción Portafolio --}}
                                <div class="row mb-3">
                                    <label for="portfolio_description" class="col-sm-2 col-form-label">Descripción Portafolio</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="portfolio_description"></textarea>
                                    </div>
                                </div>


                                {{-- Seleccionar Portafolio Image --}}
                                <div class="row mb-3">
                                    <label for="portfolio_image" class="col-sm-2 col-form-label">Seleccionar Imagen Portafolio</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="portfolio_image" type="file" id="image">
                                        @error('portfolio_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Display Image --}}
                                <div class="row mb-3">
                                    <label for="showImage" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                        <img id="showImage" class="rounded avatar-lg" 
                                            src="{{ url('upload/no_image.jpg') }}"
                                            data-holder-rendered="true">

                                    </div>
                                </div>


                                {{-- Botón Actualizar --}}
                                <div class="row mb-3">
                                    <label for="portfolio_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                        {{-- <input type="submit" class="btn btn-info waves-effect waves-light" value="Insertar Portafolio"> --}}
                                        <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="ri-save-3-line"></i> Insertar Portafolio</button>
                                        
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
