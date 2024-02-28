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
                        <h4 class="mb-sm-0">Detalles del <strong>Mensaje</strong></h4>
                        <div class="page-title-right">

                            <a href="{{ route('admin.contact.message') }}" class="btn btn-success waves-effect waves-light"><i
                                    class="dripicons-return"></i> Regresar a Lista de Mensajes</a>

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

                            <h4 class="card-title">Detalles</h4>

                            <form>

                                {{-- Nombre --}}
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $contact->name }}" readonly>
                                    </div>
                                </div>

                                {{-- Correo Electrónico --}}
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Correo Electrónico</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="{{ $contact->email }}"
                                            readonly>
                                    </div>
                                </div>

                                {{-- Teléfono --}}
                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $contact->phone }}"
                                            readonly>
                                    </div>
                                </div>

                                {{-- Fecha --}}
                                <div class="row mb-3">
                                    <label for="date" class="col-sm-2 col-form-label">Fecha</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ Carbon\Carbon::parse($contact->created_at)->format('d/m/Y') }}" readonly>
                                    </div>
                                </div>

                                {{-- Asunto --}}
                                <div class="row mb-3">
                                    <label for="subject" class="col-sm-2 col-form-label">Asunto</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $contact->subject }}" readonly>
                                    </div>
                                </div>

                                {{-- Mensaje --}}
                                <div class="row mb-3">
                                    <label for="message" class="col-sm-2 col-form-label">Mensaje</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="5" readonly>{{ $contact->message }}</textarea>
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
