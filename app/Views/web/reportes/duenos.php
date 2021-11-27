<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte Mascotas por Dueño</h1>
                    <p>Muestra: nombre de la macota, nombre de la raza, código del veterinario,
                        nombre del veterinario y el nombre del dueño. Teniendo como restricción el nombre del dueño,
                        esto quiere decir que al realizar dicha consulta dará como resultado todas las macotas que
                        posea un
                        dueño.
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
                                        <th>Nombre Mascota</th>
                                        <th>Raza</th>
                                        <th>CMVP</th>
                                        <th>Nombre Veterinario</th>
                                        <th>Nombre Dueño</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($duenos as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['nombre']; ?></td>
                                        <td><?= $value['raza']; ?></td>
                                        <td><?= $value['CMVP']; ?></td>
                                        <td><?= $value['nom_veterinario']; ?></td>
                                        <td><?= $value['Nom_Dueno']; ?></td>
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