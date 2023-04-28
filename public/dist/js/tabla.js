$(document).ready(function() {
    $(".tablas").dataTable({
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
                    columns: [0, 1, 2, 3, 4, 5], //exportar solo algunas columnas
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
    $(".canastas").dataTable({
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
                    columns: [0, 1, 2, 3, 4], //exportar solo algunas columnas
                },
            },
            {
                extend: "excelHtml5", // Extend the excel button
                text: "Exportar Exel",
                title: "A.D.E.O.M. Colonia",
                exportOptions: {
                    columns: [0, 1, 2, 3, 4], //exportar solo algunas columnas
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
                    columns: [0, 1, 2, 3, 4],
                }


            },
            {
                extend: 'copy',
                title: "A.D.E.O.M. Colonia",
                exportOptions: {
                    columns: [0, 1, 2, 3, 4], //exportar solo la primera y segunda columna
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



    $(".tabla").dataTable({
        // 1 - inicializacion
        select: true,
        bFilter: false,
        bInfo: false,
        // 6 - uso de botones
        responsive: "true",
        dom: "Bfrtilp",
        buttons: [],
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

    $(".otra").dataTable({
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
                    columns: [0, 1, 2, 3], //exportar solo la primera y segunda columna
                },
            },
            {
                extend: "excelHtml5", // Extend the excel button
                text: "Exportar Exel",
                title: "A.D.E.O.M. Colonia",
                exportOptions: {
                    columns: [0, 1, 2, 3], //exportar solo la primera y segunda columna
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
                    columns: [0, 1, 2, 3]
                }
            },
            {
                extend: 'copy',
                title: "A.D.E.O.M. Colonia",
                exportOptions: {
                    columns: [0, 1, 2, 3], //exportar solo la primera y segunda columna
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