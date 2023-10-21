<?php

class ControladorReporte
{

    /*=============================================
    DESCARGAR REPORTE EN EXCEL
    =============================================*/
    public function ctrDescargarReporte()
    {

        if (isset($_GET["reporte"])) {

            $tabla = $_GET["reporte"];
            $reporte = ModeloRepportes::mdlDescargarReporte($tabla);

            /*=============================================
            CREAMOS EL ARCHIVO DE EXCEL
            =============================================*/
            $nombre = $_GET["reporte"] . '.xml';

            header('Expires: 0');
            header('Cache-control: private');
            header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
            header("Cache-Control: cache, must-revalidate");
            header('Content-Description: File Transfer');
            header('Last-Modified: ' . date('D, d M Y H:i:s'));
            header("Pragma: public");
            header('Content-Disposition:; filename="' . $nombre . '"');
            header("Content-Transfer-Encoding: binary");


            if ($_GET["reporte"] == "medicamentos") {

                echo utf8_decode("

					<table border='0'>

						<tr>

							<td style='font-weight:bold; border:1px solid #eee;'>COD_MEDICAMENTO</td>
							<td style='font-weight:bold; border:1px solid #eee;'>NOMBRE</td>
							<td style='font-weight:bold; border:1px solid #eee;'>DESCRIPCION</td>
							<td style='font-weight:bold; border:1px solid #eee;'>DOSIS</td>
							



						</tr>");

                foreach ($reporte as $key => $value) {

                    /*=============================================
                    TRAER MEDICAMENTO
                    =============================================*/
                   

                    echo utf8_decode("

					 	<tr>
							<td style='border:1px solid #eee;'>" . $value["id"] . "</td>
							<td style='border:1px solid #eee;'>" . $value["nombre"] . "</td>

					 ");

                    echo utf8_decode("<td style='border:1px solid #eee;'>" . $value["descripcion"] . "</td>
			 					  	 <td style='border:1px solid #eee;'>" . $value["dosis"] . "</td>
			 					  	 </tr>");

                }

                echo utf8_decode("</table>

					");

            }

            /*=============================================
            CREAMOS EL ARCHIVO DE EXCEL
            =============================================*/
            $nombre = $_GET["reporte"] . '.xml';

            header('Expires: 0');
            header('Cache-control: private');
            header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
            header("Cache-Control: cache, must-revalidate");
            header('Content-Description: File Transfer');
            header('Last-Modified: ' . date('D, d M Y H:i:s'));
            header("Pragma: public");
            header('Content-Disposition:; filename="' . $nombre . '"');
            header("Content-Transfer-Encoding: binary");


            if ($_GET["reporte"] == "clientes") {

                echo utf8_decode("

					<table border='0'>

						<tr>

							<td style='font-weight:bold; border:1px solid #eee;'>COD_CLIENTE</td>
							<td style='font-weight:bold; border:1px solid #eee;'>CEDULA</td>
							<td style='font-weight:bold; border:1px solid #eee;'>NOMBRES</td>
							<td style='font-weight:bold; border:1px solid #eee;'>APELLIDOS</td>
							<td style='font-weight:bold; border:1px solid #eee;'>DIRECCION</td>
                            <td style='font-weight:bold; border:1px solid #eee;'>TELEFONO</td>



						</tr>");

                foreach ($reporte as $key => $value) {

                    /*=============================================
                    TRAER MEDICAMENTO
                    =============================================*/
                   

                    echo utf8_decode("

					 	<tr>
							<td style='border:1px solid #eee;'>" . $value["id"] . "</td>
							<td style='border:1px solid #eee;'>" . $value["cedula"] . "</td>

					 ");

                    echo utf8_decode("<td style='border:1px solid #eee;'>" . $value["nombres"] . "</td>
			 					  	 <td style='border:1px solid #eee;'>" . $value["apellidos"] . "</td>
                                    <td style='border:1px solid #eee;'>" . $value["direccion"] . "</td>
                                    <td style='border:1px solid #eee;'>" . $value["telefono"] . "</td>
			 					  	 </tr>");

                }

                echo utf8_decode("</table>

					");

            }

            if ($_GET["reporte"] == "productos") {

                echo utf8_decode("

					<table border='0'>

						<tr>

							<td style='font-weight:bold; border:1px solid #eee;'>COD_MASCOTA</td>
							<td style='font-weight:bold; border:1px solid #eee;'>NOMBRE</td>
							<td style='font-weight:bold; border:1px solid #eee;'>RAZA</td>
							<td style='font-weight:bold; border:1px solid #eee;'>EDAD</td>
							<td style='font-weight:bold; border:1px solid #eee;'>PESO</td>
							<td style='font-weight:bold; border:1px solid #eee;'>MEDICAMENTO</td>
							<td style='font-weight:bold; border:1px solid #eee;'>CLIENTE</td>




						</tr>");

                foreach ($reporte as $key => $value) {

                    /*=============================================
                    TRAER MASCOTA
                    =============================================*/

                    $item1       = "id";
                    $valor1      = $value["medicamento_id"];
                    $medicamnetos = ControladorMedicamento::ctrMostrarMedicamento($item1,  $valor1);

                    $item2       = "id";
                    $valor2      = $value["cliente_id"];
                    $clientes = ControladorCliente::ctrMostrarCliente($item2,  $valor2);

                    echo utf8_decode("

					 	<tr>
							<td style='border:1px solid #eee;'>" . $value["identificacion"] . "</td>
							<td style='border:1px solid #eee;'>" . $value["nombre"] . "</td>

					 ");

                    echo utf8_decode("<td style='border:1px solid #eee;'>" . $value["raza"] . "</td>
			 					  	 <td style='border:1px solid #eee;'>" . $value["edad"] . "</td>
			 					  	 <td style='border:1px solid #eee;'>" . $value["peso"] . "</td>
			 					  	  <td style='border:1px solid #eee;'>" . $medicamnetos["nombre"] . "</td>
			 					  	  <td style='border:1px solid #eee;'>" . $clientes["nombres"] . $clientes["apellidos"]."</td>

			 					  	 </tr>");

                }

                echo utf8_decode("</table>

					");

            }

        }
    }
}
