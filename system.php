<?php
echo '<pre>';

// Muestra el resultado completo del comando "ping #####", y devuelve la
// ultima linea de la salida en $ultima_linea. Almacena el valor de
// retorno del comando en $retval.
$ultima_linea = system('ping 192.168.1.76', $retval);

// Imprimir informacion adicional
echo '
</pre>
<hr />Ultima linea de la salida: ' . $ultima_linea . ' 
<hr />Valor de retorno: ' . $retval;
?>
