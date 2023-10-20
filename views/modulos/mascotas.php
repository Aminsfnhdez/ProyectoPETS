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
                            <li class="active">Mascotas</li>
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
                                    Nueva Mascota
                                </button>
                            </div>
                            <div class="col-md-3">
                                <a href="views/modulos/reportes.php?reporte=mascotas">
                                    <button class="btn btn-success">Reporte en Excel</button></a>
                            </div>
                        </div>



                        <div class="col-md-10">
                            <center><strong class="card-title">Tabla Mascotas</strong></center>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered tablaProductos" id="tablaProductos">
                            <thead>
                                <tr>
                                    <th style="width:10px">#</th>
                                    <th>Nombre</th>
                                    <th>Raza</th>
                                    <th>Edad</th>
                                    <th>Peso</th>
                                    <th>Foto</th>
                                    <th>Medicamento</th>
                                    <th>Cliente</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php

                                $item = null;
                                $valor = null;
                                $pets = ControladorMascota::ctrMostrarMascota($item, $valor);
                                
                                foreach ($medicamnetos as $key => $value) {

                                    echo ' <tr>
                          <td>' . ($key + 1) . '</td>
                          <td>' . $value["nombre"] . '</td>
                          <td>' . $value["raza"] . '</td>
                          <td>' . $value["edad"] . '</td>
                          <td>' . $value["peso"] . '</td>
                          <td>' . $value["medicamento_id"] . '</td>
                          <td>' . $value["cliente_id"] . '</td>';

                                    if ($value["foto"] != "") {

                                        echo '<td><img src="' . $value["foto"] . '" class="img-thumbnail" width="40px"></td>';
                                    } else {

                                        echo '<td><img src="views/imgs/perfil/default/user-secret-solid.svg" class="img-thumbnail" width="40px"></td>';
                                    }

                                    
                                    echo '<td>

                          <div class="btn-group">

                            <button class="btn btn-warning btnEditarMascota" idMascota="' . $value["identificacion"] . '" data-toggle="modal" data-target="#modalEditarMascota"><i class="fa fa-pencil"></i></button>

                            <button class="btn btn-danger btnEliminarMascota" idMascota="' . $value["identificacion"] . '" fotoMascota="' . $value["foto"] . '"><i class="fa fa-times"></i></button>

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

