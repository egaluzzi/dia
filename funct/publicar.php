<?php
include "conexion.php";
				
				//Datos del formulario
				$EE1=$_POST['EE1'];
				$ER1=$_POST['ER1'];
				$EE2=$_POST['EE2'];
				$ER2=$_POST['ER2'];
				$EE3=$_POST['EE3'];
				$ER3=$_POST['ER3'];

				$B1E1=$_POST['B1E1'];
				$B1E2=$_POST['B1E2'];
				$B1E3=$_POST['B1E3'];
				$B1E4=$_POST['B1E4'];
				$B1R=$_POST['B1R'];
				$B1M=$_POST['B1M'];

				$B2E1=$_POST['B2E1'];
				$B2E2=$_POST['B2E2'];
				$B2E3=$_POST['B2E3'];
				$B2E4=$_POST['B2E4'];
				$B2R=$_POST['B2R'];
				$B2M=$_POST['B2M'];

				$B3E1=$_POST['B3E1'];
				$B3E2=$_POST['B3E2'];
				$B3E3=$_POST['B3E3'];
				$B3E4=$_POST['B3E4'];
				$B3R=$_POST['B3R'];
				$B3M=$_POST['B3M'];

				$id="1";



				//CONSULTA INSERTAR
				$update = "UPDATE dia SET EE1='$EE1', ER1='$ER1', EE2='$EE2', ER2='$ER2', EE3='$EE3', ER3='$ER3', B1E1='$B1E1', B1E2='$B1E2', B1E3='$B1E3', B1E4='$B1E4', B1R='$B1R', B1M='$B1M', B2E1='$B2E1', B2E2='$B2E2', B2E3='$B2E3', B2E4='$B2E4', B2R='$B2R', B2M='$B2M', B3E1='$B3E1', B3E2='$B3E2', B3E3='$B3E3', B3E4='$B3E4', B3R='$B3R', B3M='$B3M' WHERE id like '$id'";
  				$query = mysqli_query($enlace, $update);

  				if ($query) {
				    // La inserción fue exitosa
				    header("Location: ../index.php"); // Redirige a una página de éxito
				} else {
				    // Hubo un error
				    echo "Error: " . $update . "<br>" . mysqli_error($enlace);
				    // o puedes redirigir a una página de error
				    // header("Location: error.php");
				}

				mysqli_close($enlace); // Cierra la conexión a la base de datos
				
?>
