@extends('layout.index')

@section ('css')


@endsection
@section('contenido')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-sm-6">
                <h1 class="m-0">LISTADO AYUDAS </h1>
            </div><!-- /.col -->
            <div class="col-sm-6 text-right"> <!-- Agregando la clase "text-end" a esta columna -->
                <a href="{{route('ayudas.create')}}" class="btn btn-success">Nuevo Registro</a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- /.content-header -->

<!-- Hoverable rows start -->

<table id='table' class="table table-striped  mb-0">
    <thead class="bg-primary text-white">
        <tr>
            <th>Opciones</th>
            <th>Ficha</th>
            <th>Nombre</th>
            <th>Localidad</th>
            <th>Cedula</th>
            <th>Celular</th>
        </tr>
    </thead>
    <tbody>
       
        <tr>
            <td>
                <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>
                <!-- Button trigger for danger theme modal -->
                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete"><i class="fas fa-trash-alt"></i></button>
            </td>
         

        </tr>
        
    </tbody>

</table>



@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.3.1/jszip-2.5.0/dt-1.11.2/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.3.1/jszip-2.5.0/dt-1.11.2/datatables.min.js"></script>


<!-- Buttons online-- sin esto el imprimir desaparece -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js"></script>



<script>
    var dataURL;
    $(document).ready(function() {
        $('#table').DataTable({
            // 1 - inicializacion
            select: true,
            // 6 - uso de botones
            responsive: "true",
            dom: "Bfrtilp",
            buttons: [{
                    extend: "pdfHtml5",
                    text: "Imprimir PDF",
                    title: "A.D.E.O.M. Colonia",
                    exportOptions: {
                        columns: [1, 2], //exportar solo algunas columnas
                    },

                },
                {
                    extend: "excelHtml5", // Extend the excel button
                    text: "Exportar Exel",
                    title: "A.D.E.O.M. Colonia",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5], //exportar solo algunas columnas
                    },
                },
                {
                    extend: 'print',
                    text: 'Imprimir Limpio',
                    title: "A.D.E.O.M. Colonia",
                    exportOptions: {
                        modifier: {
                            selected: null
                        },
                        columns: [0, 1, 2, 3, 4, 5],
                    }


                },
                {
                    extend: 'copy',
                    title: "A.D.E.O.M. Colonia",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5], //exportar solo la primera y segunda columna
                    }
                }
            ],

            lengthMenu: [
                [5, 10, 15, -1],
                [5, 10, 15, "todos"],
            ],
            language: {
                decimal: "",
                emptyTable: "No hay información",
                info: "Mostrando _START_ a _END_ de _TOTAL_  Registros",
                infoEmpty: "Mostrando 0 de 0 de 0 Registros",
                infoFiltered: "(Filtrado total de Registros)",
                infoPostFix: "",
                thousands: ",",
                lengthMenu: "Mostrando  _MENU_  Registros",
                loadingRecords: "Cargando...",
                processing: "Procesando...",
                search: "Buscar:",
                zeroRecords: "Sin resultados encontrados",
                paginate: {
                    first: "Primero",
                    last: "Ultimo",
                    next: "Siguiente",
                    previous: "Anterior",
                },
            },
            "bDestroy": true
        });
    });
</script>




@endsection