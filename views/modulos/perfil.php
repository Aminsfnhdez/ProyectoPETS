<?php

if ($_SESSION["perfil"] != "administrador") {

    echo '<script>

  window.location = "inicio";

</script>';

    return;
}
?>

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
                            <li class="active">Administradores</li>
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


                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPerfil">
                            Nuevo Perfil
                        </button>


                        <div class="col-md-10">
                            <center><strong class="card-title">Tabla Administradores</strong></center>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered tablaPerfiles" id="tablaPerfiles">
                            <thead>
                                <tr>
                                    <th style="width:10px">#</th>
                                    <th>Nombres</th>
                                    <th>Email</th>
                                    <th>Foto</th>
                                    <th>Perfil</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php

                                $item  = null;
                                $valor = null;

                                $perfiles = ControladorAdministrador::ctrMostrarAdministrador($item, $valor);

                                foreach ($perfiles as $key => $value) {

                                    echo ' <tr>
                          <td>' . ($key + 1) . '</td>
                          <td>' . $value["nombre"] . '</td>
                          <td>' . $value["email"] . '</td>';

                                    if ($value["foto"] != "") {

                                        echo '<td><img src="' . $value["foto"] . '" class="img-thumbnail" width="40px"></td>';
                                    } else {

                                        echo '<td><img src="views/imgs/perfil/default/user-secret-solid.svg" class="img-thumbnail" width="40px"></td>';
                                    }

                                    echo '<td>' . $value["perfil"] . '</td>';

                                    if ($value["estado"] != 0) {

                                        echo '<td><button class="btn btn-success btn-xs btnActivar" idPerfil="' . $value["id"] . '" estadoPerfil="0" id="btnActivar">Activado</button></td>';
                                    } else {

                                        echo '<td><button class="btn btn-danger btn-xs btnActivar" idPerfil="' . $value["id"] . '" estadoPerfil="1">Desactivado</button></td>';
                                    }

                                    echo '<td>

                          <div class="btn-group">

                            <button class="btn btn-warning btnEditarPerfil" idPerfil="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarPerfil"><i class="fa fa-pencil"></i></button>

                            <button class="btn btn-danger btnEliminarPerfil" idPerfil="' . $value["id"] . '" fotoPerfil="' . $value["foto"] . '"><i class="fa fa-times"></i></button>

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