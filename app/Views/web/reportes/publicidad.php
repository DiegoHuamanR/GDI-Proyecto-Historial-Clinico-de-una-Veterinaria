<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte Envío de Publicidad</h1>
                    <p>Muestra el nombre, correo y teléfono de  los dueños cuyas mascotas realizaron una consulta en los últimos 3 años, para enviarles publicidad, descuentos, ofertas. </p>
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
                                        <th>Dueño</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Nombre Mascota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($publicidad as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['Nom_Dueno']; ?></td>
                                        <td><?= $value['Correo_Dueno']; ?></td>
                                        <td><?= $value['Telefono_Dueno']; ?></td>
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