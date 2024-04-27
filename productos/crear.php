<?php
include("../app/config.php");
include("../layout/parte1.php");

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header ">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">

        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card card-blue">
        <div class="card-header">
          <h3 class="card-title">Agregar Producto</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <label for="exampleInputEmail1">Codigo</label>
                <input type="text" class="form-control" placeholder="Ingrese nombre">
              </div>
              <div class="col-4">
                <label for="exampleInputPassword1">Producto</label>
                <input type="text" class="form-control" placeholder="Ingrese numero de documento">
              </div>
              <div class="col-7">
                <label for="exampleInputPassword1">Descripción</label>
                <input type="text" class="form-control" placeholder="Ingrese la dirección">
              </div>
              <div class="col-7">
                <label for="exampleInputPassword1">Cantidad</label>
                <input type="number" class="form-control">
              </div>
              <div class="col-7">
                <label for="exampleInputPassword1">Correo</label>
                <input type="email" class="form-control" placeholder="Ingrese la dirección">
              </div>
              <div class="col-7">
                <label for="exampleInputPassword1">Seleccionar imagen</label>
                <input type="file" class="form-control">
              </div>
            </div>
          </div>

          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-blue">Agregar</button>
          </div>
        </form>
      </div>


    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include("../layout/parte2.php"); ?>