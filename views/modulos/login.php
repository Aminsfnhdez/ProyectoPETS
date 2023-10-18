<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img class="align-content" src="views/imgs/plantilla/logov2.ico" alt="">
                </a>
            </div>
            <div class="login-form">
                <form method="post">
                    <div class="form-group">
                        <label>CORREO ELECTRÓNICO</label>
                        <input type="email" class="form-control" id="ingemail" name="ingemail" placeholder="Correo Electrónico">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" id="ingpassword" name="ingpassword" placeholder="contraseña">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Recuérdame
                        </label>


                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">INGRESAR</button>

                    <?php
                    $login = new ControladorAdministrador();
                    $login->ctrIngresoAdministrador();
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>