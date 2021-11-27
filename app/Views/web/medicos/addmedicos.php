<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Agregar Médicos Veterinarios</h1>
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
                            <form action="<?= base_url() ?>/medicos/save" method="post">
                                <button type="submit"
                                        class="btn btn-primary my-2">Guardar</button>
                                <div class="form-group">
                                    <label for="">CMVP</label>
                                    <input type="text" class="form-control" maxlength="5" name="cmvp"
                                        placeholder="Ingresar código">
                                </div>
                                <div class="form-group">
                                    <label for="">Nombre veterinario</label>
                                    <input type="text" class="form-control" name="nombre"
                                        placeholder="Ingresar nombre completo">
                                </div>
                                <div class="form-group">
                                    <label for="">Correo electrónico</label>
                                    <input type="email" class="form-control" name="correo"
                                        placeholder="Ingresar email">
                                </div>
                                <div class="form-group">
                                    <label for="">Teléfono</label>
                                    <input type="text" class="form-control" name="telefono"
                                        placeholder="Ingresar número de teléfono">
                                </div>
                            </form>
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