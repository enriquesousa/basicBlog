@extends('admin.admin_master')
@section('admin')


    <div class="page-content">
        <div class="container-fluid">

            <div class="row">

                {{-- Columna 1 --}}
                <div class="col-lg-6">
                    <div class="card">
                        
                        <div class="card-body">

                            <h4 class="mb-4">Cambiar Contraseña</h4>

                            <form method="POST" action="{{ route('admin.update.password') }}">
                                @csrf

                                {{-- Contraseña Antigua --}}
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Contraseña Antigua</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword" type="password" id="oldPassword">

                                        @error('oldPassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                                {{-- Contraseña Nueva --}}
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Contraseña Nueva</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('newPassword') is-invalid @enderror" name="newPassword" type="password" id="newPassword">

                                        @error('newPassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>
                                </div>

                                {{-- Confirmar Contraseña --}}
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Confirmar Contraseña</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="confirmPassword" type="password" id="confirmPassword">
                                    </div>
                                </div>

                              

                                {{-- Botón --}}
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Cambiar Contraseña">

                            </form>

                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

    
@endsection
