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

                            <h4 class="card-title">Configuración del Footer</h4>

                            <form method="POST" action="{{ route('footer.update') }}" enctype="multipart/form-data">
                                @csrf

                                {{-- ID --}}
                                <input type="hidden" name="id" value="{{ $dataFooter->id }}">

                                {{-- Teléfono --}}
                                <div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Teléfono</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="number" type="tel" id="example-tel-input" placeholder="(555) 555-5555" value="{{ $dataFooter->number }}">
                                    </div>
                                </div>

                                {{-- Short Description --}}
                                <div class="row mb-3">
                                    <label for="short_description" class="col-sm-2 col-form-label">Descripción corta</label>
                                    <div class="col-sm-10">
                                        <textarea name="short_description" required="" class="form-control" rows="5">{{ $dataFooter->short_description }}</textarea>
                                    </div>
                                </div>

                                {{-- Address --}}
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Dirección</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="address" type="text" id="example-text-input" value="{{ $dataFooter->address }}">        
                                    </div>
                                </div>

                                 {{-- Email --}}
                                 <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Correo Electrónico</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="email" id="example-email-input" value="{{ $dataFooter->email }}">
                                    </div>
                                </div>

                                {{-- Link Facebook --}}
                                <div class="row mb-3">
                                    <label for="facebook" class="col-sm-2 col-form-label">Liga de Facebook</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="facebook" type="text" value="{{ $dataFooter->facebook }}">
                                    </div>
                                </div>

                                {{-- Link Twitter --}}
                                <div class="row mb-3">
                                    <label for="twitter" class="col-sm-2 col-form-label">Liga de X/Twitter</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="twitter" type="text" value="{{ $dataFooter->twitter }}">
                                    </div>
                                </div>

                                {{-- Copy Right --}}
                                <div class="row mb-3">
                                    <label for="copyright" class="col-sm-2 col-form-label">Derechos de Copyright</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="copyright" type="text" value="{{ $dataFooter->copyright }}">
                                    </div>
                                </div>


                                {{-- Botón Actualizar --}}
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Actualizar Footer">

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
