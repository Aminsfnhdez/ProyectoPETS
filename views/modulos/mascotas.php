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

                            


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

