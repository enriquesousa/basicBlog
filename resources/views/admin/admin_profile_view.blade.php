@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">

            {{-- Columna 1 --}}
            <div class="col-lg-4">

                <div class="card">

                    <center>
                        <img class="rounded-circle avatar-xl mt-4" alt="200x200" 
                            src="{{ asset('backend/assets/images/users/avatar-4.jpg') }}" 
                            data-holder-rendered="true">
                    </center>

                    <div class="card-body">
                        
                        <center>

                            {{-- <h4 class="card-title">Nombre</h4> --}}
    
                            {{-- Nombre de Admin --}}
                            <h4 class="mb-0">{{ $adminData->name }}</h4>
                            <p class="text-muted">{{ $adminData->email }}</p>
    
                            <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Editar Perfil</button>
                            <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>
    
                            {{-- <div class="text-start mt-3"> --}}
                            <div class="mt-3">                                
                                
                                <p class="text-muted mb-2 font-13"><strong>Nombre:</strong> <span class="ms-2">{{ $adminData->name }}</span></p>
                            
                                <p class="text-muted mb-2 font-13"><strong>Usuario:</strong><span class="ms-2">{{ $adminData->username }}</span></p>
                            
                                <p class="text-muted mb-2 font-13"><strong>Correo:</strong> <span class="ms-2">{{ $adminData->email }}</span></p>
                                
                            </div> 

                        </center>

                    </div>

                </div>

            </div>
            

        </div>

    </div>
</div>

@endsection