<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['documento']) > 1 && strlen($_POST['name']) > 1 && strlen($_POST['email']) > 1 && strlen($_POST['categoria']) > 1){
    	
    	$documento= trim($_POST['documento']);
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $categoria= trim($_POST['categoria']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(documento, nombre, email, categoria, fecha_reg) VALUES ('$documento','$name','$email','$categoria','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
       }
}

?>