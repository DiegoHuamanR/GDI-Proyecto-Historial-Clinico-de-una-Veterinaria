<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte Tratamientos</h1>
                    <p>muestra el código, nombre, raza y el tratamiento que se le realizó a la mascota
                        acompañado con el la fecha y el nombre del médico veterinario, esto con el fin de saber que
                        medico realizó el último tratamiento de la mascota y realizarle consultas en caso la mascota esté
                        encargado de otro médico veterinario.
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
                                        <th>Código Historial</th>
                                        <th>Nombre Mascota</th>
                                        <th>Raza</th>
                                        <th>Fecha Creación</th>
                                        <th>Tratamiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tratamiento as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['codHisto']; ?></td>
                                        <td><?= $value['nombre']; ?></td>
                                        <td><?= $value['raza']; ?></td>
                                        <td><?= $value['Fecha_Created']; ?></td>
                                        <td><?= $value['tratamiento']; ?></td>
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