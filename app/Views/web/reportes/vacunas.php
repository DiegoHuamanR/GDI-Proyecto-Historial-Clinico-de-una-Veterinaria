<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Necesidad de vacunas</h1>
                    <p>Lista a las mascotas que requerirán alguna vacuna de control que generalmente se dan por año. Se
                        seleccionó el código y nombre de la mascota. Y según el último año se hará una resta con el
                        año actual para finalmente agregar una columna que indicará si la mascota requiere vacunarse o
                        no.
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
                                        <th>Última Vacuna</th>
                                        <th>Código Historial</th>
                                        <th>Código Mascota</th>
                                        <th>Nombre Mascota</th>
                                        <th>Vacunación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($vacunas as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['ultima vacuna']; ?></td>
                                        <td><?= $value['codHisto']; ?></td>
                                        <td><?= $value['Cod_mascota']; ?></td>
                                        <td><?= $value['nombre']; ?></td>
                                        <td><?= $value['LISTA PARA VACUNAS']; ?></td>
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