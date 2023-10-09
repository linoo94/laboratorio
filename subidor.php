<?php
	/*$fileName = $_FILES["archivo"]["name"]; // nombre del archivos
	$fileTmpLoc = $_FILES["archivo"]["tmp_name"]; // folder temporal de archivo
	$fileType = $_FILES["archivo"]["type"]; // tipo de archivo
	$fileSize = $_FILES["archivo"]["size"]; // tamaño del archivo
	$fileErrorMsg = $_FILES["archivo"]["error"]; // tiene valor de cero si no hay error
	if (!$fileTmpLoc) { //si no a seleccionado archivo
		echo "ERROR: Seleccione un archivo para subir.";
		exit();
	}
	if(move_uploaded_file($fileTmpLoc, "archivos/".$fileName)){
		echo $fileName." subido completamente";
	}
	else{
		echo "ERROR: al subir el archivo";
	}*/
	
?>

<?php
if (isset($_FILES["archivo"])) {
    $fileName = $_FILES["archivo"]["name"]; // nombre del archivo
    $fileTmpLoc = $_FILES["archivo"]["tmp_name"]; // carpeta temporal del archivo
    $fileType = $_FILES["archivo"]["type"]; // tipo de archivo
    $fileSize = $_FILES["archivo"]["size"]; // tamaño del archivo
    $fileErrorMsg = $_FILES["archivo"]["error"]; // tiene valor de cero si no hay error
    
    if (!$fileTmpLoc) { // si no se ha seleccionado un archivo
        echo "ERROR: Seleccione un archivo para subir.";
        exit();
    }
    
    if (move_uploaded_file($fileTmpLoc, "archivos/" . $fileName)) {
        echo $fileName . " subido exitosamente";
    } else {
        echo "ERROR: al subir el archivo";
    }
} else {
    echo "ERROR: No se ha proporcionado el archivo en la solicitud.";
}
?>
