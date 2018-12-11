<?php 
/**
 * Funcion que muestra la estructura de carpetas a partir de la ruta dada.
 */
function obtener_estructura_directorios($ruta){
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        echo "<ul>";
        $imagenes = array();
        $i = 0 ;
        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
                
            $ruta_completa = $ruta . "/" . $archivo;

            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                
                   $imagenes[$i ] = $archivo;
                   // echo $imagenes;
                    
                
            }
            $i ++;
        } echo $archivo ;
                    // return $archivo ;
        
        // Cierra el gestor de directorios
        closedir($gestor);
        echo "</ul><script> console.log(".$imagenes[0].") </script>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}

 $h = obtener_estructura_directorios("img");
 echo $h
 ?>