<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte Cantidad Total de Razas</h1>
                    <p>Muestra las razas que cuenten con un Historial Clínico, calculándole el máximo y el
                        mínimo de las edades de las mascotas Registradas agrupadas por raza y mostrando dicho calculo.
                        Asimismo, muestra la consulta común de las razas. Con el fin tener un registro de las edades de
                        las razas y cuál es la consulta que más se repite.

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
                                        <th>Raza</th>
                                        <th>Edad Mínima</th>
                                        <th>Edad Máxima</th>
                                        <th>Consulta Comun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($crazas as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['RAZA']; ?></td>
                                        <td><?= $value['MINIMO EDAD']; ?></td>
                                        <td><?= $value['maximo']; ?></td>
                                        <td><?= $value['consulta']; ?></td>
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