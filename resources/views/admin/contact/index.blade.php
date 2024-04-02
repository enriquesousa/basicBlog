@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Mensajes de la <strong>Forma de Contacto</strong></h4>

                        <div class="page-title-right">
                            {{-- <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Data Tables</li>
                        </ol> --}}
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Mensajes</h4>
                                <p class="card-title-desc">Lista de mensajes enviados desde la <code>forma de contacto</code> en el Frontend.
                            </p>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Serie</th>

                                        <th>Nombre</th>
                                        <th>Correo Electrónico</th>
                                        <th>Asunto</th>
                                        <th>Fecha</th>

                                        <th>Acción</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    @php($i = 1)
                                    @foreach ($contact as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>

                                            {{-- name --}}
                                            <td>{{ $item->name }}</td>

                                            {{-- email --}}
                                            <td>{{ $item->email }}</td>

                                            {{-- subject --}}
                                            <td>{{ mb_strimwidth($item->subject, 0, 30, '...') }}</td>

                                            {{-- date --}}
                                            <td>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>

                                            <td>

                                                {{-- Detalles --}}
                                                <a href="{{ route('admin.contact.details', $item->id) }}" class="btn btn-success sm" title="Ver Detalles"><i class="fas fa-eye"></i></a>

                                                {{-- Details --}}
                                                {{-- href="{{ route('admin.contact.details', $item->id) }}" --}}
                                                {{-- Para mostrar los detalles en una Ventana Modal --}}
                                                {{-- Es algo complicado pasar los datos a la modal ver en Joplin "Data in Modal using Ajax" --}}
                                                {{-- <a class="btn btn-success sm" title="Details Data" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" data-bs-payment="{{ $item->name }}"><i class="fas fa-eye"></i></a> --}}
                                           

                                                {{-- Delete --}}
                                                <a href="{{ route('delete.contact.message', $item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i></a>

                                            </td>
                                            
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    {{-- Ventana Modal para ver los detalles --}}
    {{-- <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Center modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Cras mattis consectetur purus sit amet fermentum.
                        Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                        Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec
                        ullamcorper nulla non metus auctor
                        fringilla.</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal --> --}}

@endsection
