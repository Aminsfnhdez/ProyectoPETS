<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Inicio</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="inicio">Inicio</a></li>
                            <!--<li><a href="#">Table</a></li>-->
                            <li class="active">Clientes</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-md-9">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregarProducto">
                                    Nuevo Cliente
                                </button>
                            </div>
                            <div class="col-md-3">
                                <a href="views/modulos/reportes.php?reporte=clientes">
                                    <button class="btn btn-success">Reporte en Excel</button></a>
                            </div>
                        </div>



                        <div class="col-md-10">
                            <center><strong class="card-title">Tabla Clientes</strong></center>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered tablaClientes" id="tablaClientes">
                            <thead>
                                <tr>
                                    <th style="width:10px">#</th>
                                    <th>Cédula</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                                $item  = null;
                                $valor = null;

                                $clients = ControladorCliente::ctrMostrarCliente($item, $valor);

                                foreach ($clients as $key => $value) {

                                    echo ' <tr>
                          <td>' . ($key + 1) . '</td>
                          <td>' . $value["cedula"] . '</td>
                          <td>' . $value["nombres"] . '</td>
                          <td>' . $value["apellidos"] . '</td>
                          <td>' . $value["direccion"] . '</td>
                          <td>' . $value["telefono"] . '</td>';
    
                          echo '<td>

                          <div class="btn-group">

                            <button class="btn btn-warning btnEditarCliente" idCliente="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarCliente"><i class="fa fa-pencil"></i></button>

                            <button class="btn btn-danger btnEliminarCliente" idCliente="' . $value["id"] . '" ><i class="fa fa-times"></i></button>

                          </div>

                        </td>

                      </tr>';
                                }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->