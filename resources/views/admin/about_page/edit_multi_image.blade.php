@extends('admin.admin_master')
@section('admin')

    {{-- Jquery CDN Para poder usar JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">

                {{-- Columna 1 --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Actualizar Imagen</h4>
                            <br><br>

                            <form method="POST" action="{{ route('update.multi.image') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $editMultiImage->id }}">
                                <input type="hidden" name="old_image" value="{{ $editMultiImage->multi_image }}">

                                {{-- Seleccionar About Image --}}
                                <div class="row mb-3">
                                    <label for="about_image" class="col-sm-2 col-form-label">Seleccionar una Imagen</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="multi_image" type="file" id="image">
                                    </div>
                                </div>

                                {{-- Display Image --}}
                                <div class="row mb-3">
                                    <label for="showImage" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                        <img id="showImage" class="rounded avatar-lg" 
                                            src="{{ asset($editMultiImage->multi_image) }}"
                                            data-holder-rendered="true">

                                    </div>
                                </div>

                                {{-- Botón Actualizar --}}
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Actualizar Imagen">

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
