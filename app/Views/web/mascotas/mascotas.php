<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mascotas</h1>
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
                                        <th>DNI Dueño</th>
                                        <th>Nombre Mascota</th>
                                        <th>Especie</th>
                                        <th>Raza</th>
                                        <th>Sexo</th>
                                        <th>Peso</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mascotas as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['codigo_mascota']; ?></td>
                                        <td><?= $value['DNI_dueno']; ?></td>
                                        <td><?= $value['nombre']; ?></td>
                                        <td><?= $value['especie']; ?></td>
                                        <td><?= $value['raza']; ?></td>
                                        <td><?= $value['sexo']; ?></td>
                                        <td><?= $value['peso']; ?></td>
                                        <td><?= $value['fechaNacimiento']; ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>/medicos/editmedicos/<?= $value['codigo_mascota'] ?>"><button class="btn btn-xs btn-warning">Editar</button></a>
                                            <a href="<?= base_url() ?>/medicos/delete/<?= $value['codigo_mascota'] ?>"><button class="btn btn-xs btn-danger">Eliminar</button></a>
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