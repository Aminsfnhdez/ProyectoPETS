
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
                                    <li class="active">Medicamentos</li>
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
                                          Nuevo Medicamento
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <a href="views/modulos/reportes.php?reporte=medicamentos">
                                          <button class="btn btn-success">Reporte en Excel</button></a>
                                </div>
                            </div>



                              <div class="col-md-10">
                                <center><strong class="card-title">Tabla Medicamentos</strong></center>
                              </div>
                            </div>
                            <div class="card-body">
                                <table  class="table table-striped table-bordered tablaMedicamentos" id="tablaMedicamentos">
                                    <thead>
                                        <tr>
                                           <th style="width:10px">#</th>
					               <th>Nombre</th>
					               <th>Descripcion</th>
					               <th>Dosis</th>
					               <th>Foto</th>
					               <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                $item  = null;
                                $valor = null;

                                $medicamnetos = ControladorMedicamento::ctrMostrarMedicamento($item, $valor);

                                foreach ($medicamnetos as $key => $value) {

                                    echo ' <tr>
                          <td>' . ($key + 1) . '</td>
                          <td>' . $value["nombre"] . '</td>
                          <td>' . $value["descripcion"] . '</td>
                          <td>' . $value["dosis"] . '</td>';

                                    if ($value["foto"] != "") {

                                        echo '<td><img src="' . $value["foto"] . '" class="img-thumbnail" width="40px"></td>';
                                    } else {

                                        echo '<td><img src="views/imgs/perfil/default/user-secret-solid.svg" class="img-thumbnail" width="40px"></td>';
                                    }

                                    
                                    echo '<td>

                          <div class="btn-group">

                            <button class="btn btn-warning btnEditarMedicamento" idMedicamento="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarMedicamento"><i class="fa fa-pencil"></i></button>

                            <button class="btn btn-danger btnEliminarMedicamento" idMedicamento="' . $value["id"] . '" fotoMedicamento="' . $value["foto"] . '"><i class="fa fa-times"></i></button>

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