@extends('layout.layout')

@section('title')

@section('content')

<div>

    <!-- Breadcumb Header -->
    <div style="margin-bottom: 20px">
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Inicio</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Gestion de plan de aula</a>
            </li>            
        </ul>
    </div>
    <!-- End Breadcumb Header -->

    <!-- Card 1 -->
    <div class="card" id="cardprofiles">
        <div class="card-body">

            <h4 class="card-title font-weight-bold text-primary">Asignación de perfil de egreso</h4>

            <!-- Forms -->
            <form>
                <div class="form-group">
                    <label for="pillSelect">Seleccionar facultad</label>
                    <select class="form-control input-pill" id="pillSelect">
                        <option disabled selected value="">Seleccione una facultad</option>
                        <option>Facultad 1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pillSelect">Seleccionar programa</label>
                    <select class="form-control input-pill" id="pillSelect">
                        <option disabled selected value="">Seleccione un programa</option>
                        <option>Programa 1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Perfil de egreso</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary btn-round text-end" data-toggle="modal" data-target="#modalprofiles">Guardar</button>
                </div>
            </form>
            <!-- End Forms -->

            <!-- Modal -->
            <div class="modal fade" id="modalprofiles" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 25px;">Advertencia</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ¿Desea guardar los cambios?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="confirmSaveCard"
                                data-ocultar="cardprofiles" data-mostrar="cardCompetencies" data-modal="modalprofiles">
                                Aceptar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->

        </div>
    </div>
    <!-- End Card 1 -->

</div>

@endsection
