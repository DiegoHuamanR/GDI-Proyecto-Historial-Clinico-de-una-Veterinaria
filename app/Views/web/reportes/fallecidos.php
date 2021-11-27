<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte Mascotas Fallecidas</h1>
                    <p>Muestra el código, nombre, sexo y fecha de muerte de la mascota, esto acompañado del nombre y
                        correo del dueño, el fin de esta consulta es identificar las mascotas ya fallecidas y proceder
                        con la eliminación de sus registros ya que no tendrá más actualizaciones de historiales médicos,
                        esto igualmente sirve también para descongestionar y disminuir el volumen de #datos.
                    </p>
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
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Código Mascota</th>
                                        <th>Nombre Mascota</th>
                                        <th>Sexo</th>
                                        <th>Nombre Dueño</th>
                                        <th>Correo Dueño</th>
                                        <th>Fecha Muerte</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($fallecidos as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['codigo_mascota']; ?></td>
                                        <td><?= $value['nombre']; ?></td>
                                        <td><?= $value['sexo']; ?></td>
                                        <td><?= $value['Nom_Dueno']; ?></td>
                                        <td><?= $value['Correo_Dueno']; ?></td>
                                        <td><?= $value['fechaMuerte']; ?></td>
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