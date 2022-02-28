@extends('layout.plantilla')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
    <div class="container">
        <h1>Reporte Socios</h1>
        <br>
        @can('crear-socio')
        <a href="{{ route('empleados') }}">
            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-user-plus"
                    aria-hidden="true"></i> Nuevo Socio</button>
        </a>
        @endcan
        <br>
        <br>
        <div class="card shadow mb-1">
            <div class="card-header py-1">
                <h6 class="m-0 font-weight-bold text-primary">Reporte Socios</h6>
            </div>
            @if (Session::has('mensaje'))
                <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-striped shadow-lg mt-4" id="dataTableEmpleados" width="100%" cellspacing="0">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>#</th>
                                <th>Alias</th>
                                <th>Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Telefono</th>
                                <th>Foto Empleado</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr>

                                    <td>{{ $empleado->id_empleado }}</td>
                                    <td>{{ $empleado->alias }}</td>
                                    <td>{{ $empleado->nombre }}</td>
                                    <td>{{ $empleado->apellido_p }}</td>

                                    <td>{{ $empleado->telefono }}</td>

                                    <td><img src="{{ asset('archivos/' . $empleado->foto) }}" height=50 width=50></td>
<<<<<<< HEAD
                                    <td style="display:block;">
                                        <a href="{{ route('modificaempleado', ['id_empleado' => $empleado->id_empleado]) }}"
                                            class="btn btn-info">

                                            <i class="fas fa-user-edit"></i> Editar
                                        </a>

                                        <a
                                            href="{{ route('desactivarempleado', ['id_empleado' => $empleado->id_empleado]) }}">
                                            <button type="button" class="btn btn-danger" id="btnElimina"
                                                data-id="{{ $empleado->id_empleado }}"><i class="fas fa-user-times"></i>
                                                Eliminar</button>
                                        </a>

=======
                                    <td style="text-align:center;">
                                        @can('editar-socio')
                                        <a href="{{ route('modificaempleado', ['id_empleado' => $empleado->id_empleado]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0
                                        0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                        </a>
                                        @endcan
                                        @if ($empleado->deleted_at)
                                        @can('desactivar-socio')
                                        <a href="{{ route('activarempleado', ['id_empleado' => $empleado->id_empleado]) }}">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock" viewBox="0 0 16 16">
                                        <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1
                                        0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z"/>
                                        </svg>                                    
                                        </a>

                                        @else
                                        <a href="{{ route('desactivarempleado', ['id_empleado' => $empleado->id_empleado]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5
                                        1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 
                                        1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                        </svg>
                                        </a>
                                        @endcan
                                        @endif
>>>>>>> dc4b048352c50ef98f357e6af8f50d0984b8ad27
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @section('js')
                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
                    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
                    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

                    <script>
                        $(document).ready(function() {
                            $('#dataTableEmpleados').DataTable({
                                responsive: true,
                                autoWidth: false,

                                "language": {
                                    "lengthMenu": "Mostrar _MENU_ registros por página",
                                    "zeroRecords": "Nada encontrado - disculpa",
                                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                                    "infoEmpty": "No records available",
                                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                                    "search": "Buscar:",
                                    "paginate": {
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }

                                }
                            });
                        });
                    </script>
                    <script>
                        const btnEliminar = document.querySelector("#btnElimina");
                        btnEliminar.addEventListener("click", function(e) {
                            e.preventDefault();
                            let alertaELimina = confirm("Estas seguro que deseas Eliminarlo ");
                            var idDataElimina = $(this).attr('data-id');
                            console.log(idDataElimina)
                            let urlEliminar =
                                "{{ route('desactivarempleado', ['id_empleado' => 'temp']) }}";
                            urlELiminar2 = urlEliminar.replace('temp', idDataElimina);

                            if (alertaELimina) {
                                fetch(urlELiminar2).then(function(response) {
                                    window.location.href =
                                        "{{ route('reporteempleado') }}"
                                })
                            }

                        })
                    </script>
                @endsection
            </div>
        </div>
    </div>
</div>
@endsection
