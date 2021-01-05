<!DOCTYPE html>
<html>
<body>

<?php

echo '<pre>';

$output = system('ping 192.168.1.76');

echo '</pre> ';

if(strpos($output, "recibido = 0" )){
    echo "No se pudo realizar ping";
}else{
    echo "Ping exitoso";
}

?>

</body>
</html>
