<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte Médicos Encargados</h1>
                    <p>Muestra el código del historial clínico junto a los médicos veterinarios encargados de cada mascota esto nos ayuda para saber que medico está a cargo de cada mascota.</p>
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
                                        <th>Cod. Historial</th>
                                        <th>CMVP</th>
                                        <th>Nombre Veterinario</th>
                                        <th>Nombre Mascota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($encargados as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['CodHisto']; ?></td>
                                        <td><?= $value['CMVP']; ?></td>
                                        <td><?= $value['nom_veterinario']; ?></td>
                                        <td><?= $value['nombre']; ?></td>
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