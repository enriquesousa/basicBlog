@extends('admin.admin_master')
@section('admin')

    {{-- Jquery CDN Para poder usar JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">

                {{-- Columna 1 --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Home Slide Page</h4>

                            <form method="POST" action="{{ route('admin.store.profile') }}" enctype="multipart/form-data">
                                @csrf

                                {{-- Title --}}
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="title" type="text" id="title"
                                            value="{{ $homeSlide->title }}">
                                    </div>
                                </div>

                                {{-- Short Title --}}
                                <div class="row mb-3">
                                    <label for="short_title" class="col-sm-2 col-form-label">Short Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="short_title" type="text" id="short_title"
                                            value="{{ $homeSlide->short_title }}">
                                    </div>
                                </div>

                                {{-- Video Url --}}
                                <div class="row mb-3">
                                    <label for="video_url" class="col-sm-2 col-form-label">Video Url</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="video_url" type="text" id="video_url"
                                            value="{{ $homeSlide->video_url }}">
                                    </div>
                                </div>

                                {{-- Seleccionar Home Slide Image --}}
                                <div class="row mb-3">
                                    <label for="home_slide" class="col-sm-2 col-form-label">Seleccionar Home Slide Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="home_slide" type="file" id="image">
                                    </div>
                                </div>

                                {{-- Display Image --}}
                                <div class="row mb-3">
                                    <label for="showImage" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                        <img id="showImage" class="rounded avatar-lg" 
                                            src="{{ !empty($homeSlide->home_slide) ? url('upload/home_slide/' . $homeSlide->home_slide) : url('upload/no_image.jpg') }}"
                                            data-holder-rendered="true">

                                    </div>
                                </div>

                                {{-- Botón Actualizar --}}
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide">

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
