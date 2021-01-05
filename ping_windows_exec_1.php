<!DOCTYPE html>
<html>
<body>

<?php

echo exec('ping 192.168.1.76', $output);

print_r($output);

$equate = "recibidos = 0";

$pos = strpos($output, $equate);

if($pos === false){
    echo "No se pudo realizar ping";
}else{
    echo "Ping exitoso";
}

?>

</body>
</html>
