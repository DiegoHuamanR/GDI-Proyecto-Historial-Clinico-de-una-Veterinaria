<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link">
        <img src="<?= base_url('/public/images/logo.png'); ?>" alt="Amor de patas"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            Amor de Patas
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>"
                        class="nav-link <?php echo $active = $page == 'inicio' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Inicio
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item has-treeview <?php echo $active = $page == 'duenos1' || $page == 'medicos' || $page == 'historial' || $page == 'mascotas' ? 'menu-open' : ''; ?>">
                    <a href="#"
                        class="nav-link <?php echo $active = $page == 'duenos1' || $page == 'medicos' || $page == 'historial' || $page == 'mascotas' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Maestros
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- <li class="nav-item">
                            <a href="./index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ingreso de secretarios</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="<?php echo base_url('/medicos') ?>"
                                class="nav-link <?php echo $active = $page == 'medicos' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Médicos Veterinarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/mascotas') ?>"
                                class="nav-link <?php echo $active = $page == 'mascotas' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mascotas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/duenos') ?>"
                                class="nav-link <?php echo $active = $page == 'duenos1' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dueños</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/historial') ?>"
                                class="nav-link <?php echo $active = $page == 'historial' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Historial Clínico</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html"
                                class="nav-link <?php echo $active = $page == 'consultas' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html"
                                class="nav-link <?php echo $active = $page == 'examenes' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Exámenes Clínicos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview <?php echo $active = $page == 'escritos' || $page == 'cartas' || $page == 'tratamiento' || $page == 'vacunas' || $page == 'duenos' || $page == 'realizadas' || $page == 'fallecidos' || $page == 'realizadas' || $page == 'peticion' || $page == 'notificaciones' || $page == 'examenes' ? 'menu-open' : ''; ?>">
                    <a href="#"
                        class="nav-link <?php echo $active = $page == 'escritos' || $page == 'cartas' || $page == 'tratamiento' || $page == 'vacunas' || $page == 'duenos' || $page == 'realizadas' || $page == 'fallecidos' || $page == 'realizadas' || $page == 'peticion' || $page == 'notificaciones' || $page == 'examenes' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-file-excel"></i>
                        <p>
                            Reportes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('/reportes/publicidad') ?>"
                                class="nav-link <?php echo $active = $page == 'escritos' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Envío de publicidad</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/reportes/encargados') ?>"
                                class="nav-link <?php echo $active = $page == 'cartas' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Médicos encargados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/reportes/hvacunacion') ?>"
                                class="nav-link <?php echo $active = $page == 'notificaciones' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Historial vacunación</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/reportes/crazas') ?>"
                                class="nav-link <?php echo $active = $page == 'peticion' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cantidad de razas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#modelId"
                                class="nav-link <?php echo $active = $page == 'examenes' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Examenes mascotas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/reportes/fallecidos') ?>"
                                class="nav-link <?php echo $active = $page == 'fallecidos' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mascotas Fallecidas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#modelId2"
                                class="nav-link <?php echo $active = $page == 'realizadas' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultas Realizadas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#modelId3"
                                class="nav-link <?php echo $active = $page == 'duenos' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dueños</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/reportes/tratamiento') ?>"
                                class="nav-link <?php echo $active = $page == 'tratamiento' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Último tratamiento</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/reportes/vacunas') ?>"
                                class="nav-link <?php echo $active = $page == 'vacunas' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vacunas</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Selecciona una rango de edad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() ?>/reportes/examenes" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Edad Mínima</label>
                        <input type="number" class="form-control" name="minimo" required>
                    </div>
                    <div class="form-group">
                        <label for="">Edad Máxima</label>
                        <input type="number" class="form-control" name="maximo" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Selecciona un mes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() ?>/reportes/realizados" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Mes</label>
                        <select name="mes" class="form-control" required>
                            <option value="1">Enero</option>
                            <option value="2">Febrero</option>
                            <option value="3">Marzo</option>
                            <option value="4">Abril</option>
                            <option value="5">Mayo</option>
                            <option value="6">Junio</option>
                            <option value="7">Julio</option>
                            <option value="8">Agosto</option>
                            <option value="9">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Selecciona un dueño</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() ?>/reportes/duenos" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nombre de dueño</label>
                        <select name="dueno" class="form-control" required>
                            <?php foreach ($duenos as $key => $value): ?>
                            <option value="<?= $value['DNI'] ?>"><?= $value['Nom_Dueno'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>