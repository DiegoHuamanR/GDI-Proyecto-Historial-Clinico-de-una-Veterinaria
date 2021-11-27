<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Agregar Mascotas</h1>
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
                            <form action="<?= base_url() ?>/mascotas/save" method="post">
                                <button type="submit" class="btn btn-primary my-2">Guardar</button>
                                <div class="form-group">
                                    <label for="">Código</label>
                                    <input type="text" class="form-control" maxlength="3" name="codigo"
                                        placeholder="Ingresar código">
                                </div>
                                <div class="form-group">
                                    <label for="">Nombre dueño</label>
                                    <select name="dueno" class="form-control" required>
                                        <?php foreach ($duenos as $key => $value): ?>
                                        <option value="<?= $value['DNI'] ?>"><?= $value['Nom_Dueno'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Nombre Mascota</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingresar nombre">
                                </div>
                                <div class="form-group">
                                    <label for="">Especie</label>
                                    <input type="text" class="form-control" name="especie"
                                        placeholder="Ingresar especie">
                                </div>
                                <div class="form-group">
                                    <label for="">Raza</label>
                                    <input type="text" class="form-control" name="raza"
                                        placeholder="Ingresar raza">
                                </div>
                                <div class="form-group">
                                    <label for="">Sexo</label>
                                    <select name="sexo" class="form-control" required>
                                        <option value="h">Hembra</option>
                                        <option value="m">Macho</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Peso</label>
                                    <input type="text" class="form-control" name="peso"
                                        placeholder="Ingresar peso">
                                </div>
                                <div class="form-group">
                                    <label for="">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" name="fecha"
                                        placeholder="Ingresar raza">
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