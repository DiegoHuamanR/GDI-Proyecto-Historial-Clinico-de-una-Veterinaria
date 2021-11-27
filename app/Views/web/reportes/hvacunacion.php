<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte Historial Vacunación</h1>
                    <p>muestra el código y el nombre de la mascota, el nombre del Dueño, la fecha de la consulta y su
                        motivo, pero solo muestra los motivos de consulta que sean vacuna. Además, calcula los meses
                        faltantes para la próxima vacuna de acuerdo a la fecha de consulta y muestra lo calculado. Con
                        el fin de programar y tener un registro exacto de las Vacunas de los Pacientes.
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
                                        <th>Cod. Mascota</th>
                                        <th>Nombre Dueño</th>
                                        <th>Fecha Consulta</th>
                                        <th>Motivo Consulta</th>
                                        <th>Próxima Vacuna</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($hvacunacion as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['codigo_mascota']; ?></td>
                                        <td><?= $value['Nombre']; ?></td>
                                        <td><?= $value['nom_dueno']; ?></td>
                                        <td><?= $value['fecha de consulta']; ?></td>
                                        <td><?= $value['Proxima vacuna Programada']; ?></td>
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