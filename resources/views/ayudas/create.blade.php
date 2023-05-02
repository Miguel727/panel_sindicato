@extends('layout.index')

@section ('css')


@endsection
@section('contenido')


<!-- <form rool="form" action="funcionarios.store" method="POST"> -->
<form rool="form" action="" method="POST">
  <h4 class="modal-title">Agregar nueva ayuda social</h4>

    <div class="modal-body">

        <div class="box-body">

            <div class="form-group">

                <div class="input-group">

                    <input type="text" class="form-control input-lg" name="nombre" placeholder="Nombre" required>

                </div>

            </div>

            <div class="form-group">

                <div class="input-group">

                    <input type="number" class="form-control input-lg" name="ficha" placeholder="Ficha" required>

                </div>

            </div>

            <div class="form-group">

                <div class="input-group">

                    <input type="text" class="form-control input-lg" name="localidad" placeholder="Localidad" required>

                </div>

            </div>
            <div class="form-group">

                <div class="input-group">

                    <input type="text" class="form-control input-lg" name="cedula" placeholder="Cédula" required>

                </div>

            </div>
            <div class="form-group">

                <div class="input-group">

                    <input type="text" class="form-control input-lg" name="celular" placeholder="Celular" required>

                </div>

            </div>


            <div class="form-group">

                <span class="input-group-addon">Tipo de Funcionario</span>

                <select name="tipo" class="form-control">
                    <option value="FUNCIONARIO">FUNCIONARIO</option>

                    <option value="PASANTES">PASANTES</option>
                    <option value="LIBERADOS">LIBERADOS</option>
                </select>
            </div>




        </div>

    </div>



    <div class="modal-footer">

        <a href="{{route('funcionarios')}}" class="btn btn-default">Cancelar</a>

       <!-- <a href="{{route('funcionarios.store')}}" class="btn btn-success">Guardar</a>-->

    </div>


</form>



@endsection