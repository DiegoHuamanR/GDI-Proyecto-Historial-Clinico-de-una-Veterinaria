<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Historial Clinico</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12 m-auto">
                    <div class="card card-primary">
                        <div class="card-body p-3">
                            <a href="<?= base_url() ?>/addmascotas"><button class="btn btn-xs btn-primary my-2">Agregar nuevo</button></a>
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre Mascota</th>
                                        <th>Fecha Creación</th>
                                        <th>Hora</th>
                                        <th>Fecha Ult. Vacuna</th>
                                        <th>Fecha Ult. Desparacitación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($historial as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['codHIsto']; ?></td>
                                        <td><?= $value['nombre']; ?></td>
                                        <td><?= $value['Fecha_Created']; ?></td>
                                        <td><?= $value['Hora']; ?></td>
                                        <td><?= $value['UltVacuna']; ?></td>
                                        <td><?= $value['UltDespa']; ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>/medicos/editmedicos/<?= $value['codHIsto'] ?>"><button class="btn btn-xs btn-warning">Editar</button></a>
                                            <a href="<?= base_url() ?>/medicos/delete/<?= $value['codHIsto'] ?>"><button class="btn btn-xs btn-danger">Eliminar</button></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->