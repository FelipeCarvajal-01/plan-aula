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

    <!-- Card Select-->
    <div class="card">
        <div class="card-body">

            <h4 class="card-title font-weight-bold text-primary" style="margin-bottom: 10px;">Seleccion de curso</h4>

            <div class="form-group">
                <label for="pillSelect">Seleccione programa</label>
                <select class="form-control input-pill" id="pillSelect">
                    <option disabled selected value="">Seleccione un programa</option>
                </select>
            </div>

            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalCourse">Seleccione el curso</button>

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="modalCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 25px;">Seleccion de curso</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

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
                                            <th scope="col">Facultad</th>
                                            <th scope="col">Programa</th>
                                            <th scope="col">Curso</th>
                                            <th scope="col">Campo</th>
                                            <th scope="col">Componente</th>
                                            <th scope="col">Semestre</th>
                                            <th scope="col">Creditos</th>
                                            <th scope="col">Tipo de curso</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="detalle-docente" data-docente-id="1">
                                                <a href="" class="text-dark">
                                                    Facultad
                                                </a>
                                            </td>
                                            <td class="detalle-docente" data-docente-id="1">
                                                <a href="" class="text-dark">
                                                    Programa
                                                </a>
                                            </td>
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table -->

                            <!-- Pagination -->
                            <nav aria-label="Page navigation example" style="margin-top: 20px;">
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
    <!-- End Card -->

    <!-- Card List-->
    <div class="card">
        <div class="card-body">

            <h4 class="card-title font-weight-bold text-primary" style="margin-bottom: 10px;">Listado de curso</h4>

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
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

        </div>
    </div>
    <!-- End Card -->

    <!-- Card Info -->
    <div class="card" id="cardprofiles">
        <div class="card-body">

            <h4 class="card-title font-weight-bold text-primary">Información de curso</h4>

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Facultad:</label>
                        <p id="nameFaculty"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Programa:</label>
                        <p id="nameProgram"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Campo:</label>
                        <p id="nameField"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Componente:</label>
                        <p id="nameComponent"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Curso:</label>
                        <p id="nameCourse"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Semestre:</label>
                        <p id="nameSemester"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Creditos:</label>
                        <p id="nameCredits"></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Tipo de curso:</label>
                        <p id="nameCourseType"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Card 1 -->

    <!-- Card Objective -->
    <div class="card" id="cardprofiles">
        <div class="card-body">

            <h4 class="card-title font-weight-bold text-primary">Objetivo general</h4>

            <div style="margin-top: 10px;">
                <label>Ingrese objetivo general:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
            </div>

        </div>
    </div>
    <!-- End Card 1 -->

    <!-- Card Specific Objective -->
    <div class="card" id="cardprofiles">
        <div class="card-body">

            <h4 class="card-title font-weight-bold text-primary">Objetivos especificos</h4>

            <div style="margin-top: 10px;">
                <label>Ingrese objetivo especifico #1</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>

            <div style="margin-top: 10px;">
                <label>Ingrese objetivo especifico #2</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>

            <div style="margin-top: 10px;">
                <label>Ingrese objetivo especifico #3</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>

        </div>
    </div>
    <!-- End Card 1 -->

</div>

@endsection