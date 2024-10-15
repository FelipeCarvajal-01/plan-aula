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
                <a href="#">Gestionar perfil de egreso</a>
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

    <!-- Card 2 -->
    <div class="card d-none" id="cardCompetencies">
        <div class="card-body">

            <h4 class="card-title font-weight-bold text-primary">Asignación de competencias</h4>

            <!-- Forms -->
            <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Competencia 1</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Competencia 2</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary btn-round text-end" data-toggle="modal" data-target="#modalCompetencies">Guardar</button>
                </div>
            </form>
            <!-- End Forms -->

            <!-- Modal -->
            <div class="modal fade" id="modalCompetencies" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            <button type="button" class="btn btn-primary" id="confirmSaveCard2"
                                data-ocultar="cardCompetencies" data-mostrar="cardResultsLearning" data-modal="modalCompetencies">
                                Aceptar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->

        </div>
    </div>
    <!-- End Card 2 -->

    <!-- Card 3 -->
    <div class="card d-none" id="cardResultsLearning">
        <div class="card-body">

            <h4 class="card-title font-weight-bold text-primary" style="margin-bottom: 10px;">Asignación de resultados de aprendizaje</h4>

            <!-- Accordion -->
            <div class="accordion accordion-secondary">
                <div class="card">
                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="span-icon">
                            <div class="flaticon-box-1"></div>
                        </div>
                        <div class="span-title">
                            Competencia #1
                        </div>
                        <div class="span-mode"></div>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Accordion -->

            <!-- Forms -->
            <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Resultado de aprendizaje #1</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Resultado de aprendizaje #2</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                </div>
            </form>
            <!-- End Forms -->

            <!-- Accordion -->
            <div class="accordion accordion-secondary">
                <div class="card">
                    <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="span-icon">
                            <div class="flaticon-box-1"></div>
                        </div>
                        <div class="span-title">
                            Competencia #2
                        </div>
                        <div class="span-mode"></div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Accordion -->

            <!-- Forms -->
            <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Resultado de aprendizaje #3</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Resultado de aprendizaje #4</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary btn-round text-end" data-toggle="modal" data-target="#modalResultsLearning">Guardar</button>
                </div>
            </form>
            <!-- End Forms -->

            <!-- Modal -->
            <div class="modal fade" id="modalResultsLearning" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            <button type="button" class="btn btn-primary" id="confirmSaveCard3"
                                data-ocultar="cardResultsLearning" data-mostrar="cardprofiles" data-modal="modalResultsLearning">
                                Aceptar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->

        </div>
    </div>
    <!-- End Card 3 -->

    <!-- Scripts -->
    <script src="{{ asset('js/profilesCompetenciesRa2.js') }}"></script>
    <!-- End Scripts -->

</div>

@endsection