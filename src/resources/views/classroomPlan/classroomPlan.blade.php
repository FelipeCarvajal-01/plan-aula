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

    <!-- Card -->
    <div class="card">
        <div class="card-body">

            <h4 class="card-title font-weight-bold text-primary" style="margin-bottom: 10px;">Listado de plan de aula</h4>

            <!-- Row -->
            <div class="table-responsive">
                <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="basic-datatables_length"><label>Show <select name="basic-datatables_length" aria-controls="basic-datatables" class="form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="basic-datatables_filter" class="dataTables_filter"><label>Buscador:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatables"></label></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Row -->

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-head-bg-primary table-hover" cellspacing="0" width="100%" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Campo</th>
                            <th scope="col">Componente</th>
                            <th scope="col">Semestre</th>
                            <th scope="col">Creditos</th>
                            <th scope="col">Tipo de curso</th>
                            <th scope="col">Objetivo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="detalle-docente" data-docente-id="1">
                                <a href="" class="text-dark">
                                    Curso
                                </a>
                            </td>
                            <td class="detalle-docente" data-docente-id="1">
                                <a href="" class="text-dark">
                                    Campo
                                </a>
                            </td>
                            <td class="detalle-docente" data-docente-id="1">
                                <a href="" class="text-dark">
                                    Componente
                                </a>
                            </td>
                            <td class="detalle-docente" data-docente-id="1">
                                <a href="" class="text-dark">
                                    Semestre
                                </a>
                            </td>
                            <td class="detalle-docente" data-docente-id="1">
                                <a href="" class="text-dark">
                                    Creditos
                                </a>
                            </td>
                            <td class="detalle-docente" data-docente-id="1">
                                <a href="" class="text-dark">
                                    Tipo de curso
                                </a>
                            </td>
                            <td class="detalle-docente" data-docente-id="1">
                                <a href="" class="text-dark">
                                    Objetivo
                                </a>
                            </td>
                            <td>
                                <!-- Botón para editar -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modalViewInformation">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <!-- Botón para eliminar -->
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#modalConfirmationDelete">
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <!-- End Pagination -->

        </div>
    </div>
    <!-- End Card -->

    <!-- Card 1 -->
    <div class="card" id="cardprofiles">
        <div class="card-body">

            <h4 class="card-title font-weight-bold text-primary">Asignación de perfil de egreso</h4>

            <!-- Forms -->
            <form>
                <div class="form-group">
                    <label for="pillSelect">Seleccionar ROL</label>
                    <select class="form-control input-pill" id="programa" name="programa" required="required">
                        <option disabled selected value="">Seleccione un ROL</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->rol }}</option>
                        @endforeach
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