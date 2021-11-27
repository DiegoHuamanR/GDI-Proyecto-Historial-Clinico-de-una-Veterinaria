<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte Consultas</h1>
                    <p>Muestra código, nombre, raza y especie raza de la mascota.Finalmente, se agregó la fecha
                        que se realizó la consulta en la veterinaria con su respectivo veterinario, teniendo como
                        restricción que dicha consulta se haya realizado en el mes seleccionado.
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
                                        <th>Especie</th>
                                        <th>Raza</th>
                                        <th>CMVP</th>
                                        <th>Nombre Veterinario</th>
                                        <th>Fecha Creación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($realizados as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['codigo_mascota']; ?></td>
                                        <td><?= $value['nombre']; ?></td>
                                        <td><?= $value['especie']; ?></td>
                                        <td><?= $value['raza']; ?></td>
                                        <td><?= $value['CMVP']; ?></td>
                                        <td><?= $value['nom_veterinario']; ?></td>
                                        <td><?= $value['Fecha_Created']; ?></td>
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