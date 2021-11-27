<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte Exámenes por Edad</h1>
                    <p>muestra el código, nombre, raza, día mes, año y los resultados de los exámenes de sistemas que se
                        le realizaron a la mascota, pero aplicando un filtro de edad.

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
                                        <th>Raza</th>
                                        <th>Fecha Creación</th>
                                        <th>Exámen Realizaado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($examenes as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['codigo_mascota']; ?></td>
                                        <td><?= $value['nombre']; ?></td>
                                        <td><?= $value['raza']; ?></td>
                                        <td><?= $value['Fecha_Created']; ?></td>
                                        <td><?= $value['descripcion_SIS']; ?></td>
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