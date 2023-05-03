@extends('layout.index')

@section ('css')


@endsection
@section('contenido')
<!-- Content Header (Page header) -->

<style>
            .bandera {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 70%;
                position: center top;
                object-fit: cover;
                object-position: bottom;
            }

            @media only screen and (max-width: 480px) {
                .bandera {
                    width: 100%;

                }
            }
        </style>

    <img src="{{ asset('/dist/img/bandera.png') }}" class="bandera"  alt="Responsive image">

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


@endsection