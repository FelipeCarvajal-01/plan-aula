@extends('layout.layout')

@section('title', 'User Management')

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
                <a href="#">Gestionar perfil de usuario</a>
            </li>
        </ul>
    </div>
    <!-- End Breadcumb Header -->

    <div class="card">
        <!-- Card add row -->
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title font-weight-bold text-primary">Agregar Usuario</h4>
                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                    <i class="fa fa-plus"></i>
                    Agregar
                </button>
            </div>
        </div>
        <!-- end Card add row -->

        <div class="card-body">
            <!-- Row -->
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="add-row_length">
                        <label>Mostrar
                            <select name="add-row_length" aria-controls="add-row" class="form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            Entradas
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="add-row_filter" class="dataTables_filter text-right">
                        <label>Buscar:
                            <input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="add-row" style="max-width: 300px;">
                        </label>
                    </div>
                </div>
            </div>
            <!-- end Row -->

            <!-- User Management Table -->
            <div class="table table-head-bg-primary">
                <table class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="{{ route('ListUsers')}}" class="text-dark">1</a>
                            </td>
                            <td><a href="{{ route('ListUsers')}}" class="text-dark">Mark</a></td>
                            <td><a href="{{ route('ListUsers')}}" class="text-dark">Otto</a></td>
                            <td><a href="{{ route('ListUsers')}}" class="text-dark">@mdo</a></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#ModalUpdate">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <!-- End of User Management Table -->

            <!-- Agrega esto en tu sección <head> para cargar Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <span class="page-link" tabindex="-1">Anterior</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <span class="page-link">2 <span class="sr-only">(current)</span></span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                    </li>
                </ul>
            </nav>
            <!-- End of Pagination -->

            <!-- Modal -->
            <form method="POST" action="/user" id="userForm">
                @csrf
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" style="display: none;"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header no-bd">
                                <h5 class="modal-title">
                                    <span class="fw-mediumbold">Nuevo</span>
                                    <span class="fw-light">Usuario</span>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="small">Crea una nueva fila usando este formulario, asegúrate de completarlos
                                    todos.</p>
                                <form id="userForm">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Nombres</label>
                                                <input id="addName" type="text" class="form-control"
                                                    placeholder="Nombres" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Apellidos</label>
                                                <input id="addLastName" type="text" class="form-control"
                                                    placeholder="Apellidos" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Teléfono</label>
                                                <input id="addPhone" type="text" class="form-control"
                                                    placeholder="Teléfono" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Correo</label>
                                                <input id="addEmail" type="email" class="form-control"
                                                    placeholder="Correo" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Contraseña</label>
                                                <input id="addPassword" type="password" class="form-control"
                                                    placeholder="Contraseña" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Rol</label>
                                                <select id="addRole" class="form-control" required>
                                                    <option value="">Seleccionar Rol</option>
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Usuario</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer no-bd">
                                <button type="button" id="addRowButton" class="btn btn-primary">Agregar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- end Modal -->

            <!-- modal update -->
            <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" style="display: none;"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header no-bd">
                            <h5 class="modal-title">
                                <span class="fw-mediumbold">
                                    Actualizar</span>
                                <span class="fw-light">
                                    Usuario
                                </span>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="small">Actualiza una fila usando este formulario, asegúrate de completarlos todos.
                            </p>
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Nombres</label>
                                            <input id="updateName" type="text" class="form-control"
                                                placeholder="Nombres" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Apellidos</label>
                                            <input id="updateLastName" type="text" class="form-control"
                                                placeholder="Apellidos" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Teléfono</label>
                                            <input id="updatePhone" type="text" class="form-control"
                                                placeholder="Teléfono" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Correo</label>
                                            <input id="updateEmail" type="email" class="form-control"
                                                placeholder="Correo" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Contraseña</label>
                                            <input id="updatePassword" type="password" class="form-control"
                                                placeholder="Contraseña" required>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer no-bd">
                            <button type="button" id="updateRowButton" class="btn btn-primary">actualizar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal update -->

            <!-- Modal eliminate -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Elminar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">Desea eliminar este usuario?
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="addRowButton" class="btn btn-primary"
                                data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button </div>
                        </div>
                    </div>
                </div>
                <!-- end modal  eliminate -->

            </div>
        </div>

        <!-- scripts -->
        <script src="{{ asset('js/users.js')}}"></script>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- end scripts -->

    </div>
    @endsection