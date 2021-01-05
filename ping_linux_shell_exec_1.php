<!DOCTYPE html>
<html>
<body>

<?php

$output = shell_exec('ping 192.168.1.76');

echo "<pre>$output</pre>";

    if(strpos($output, "recibido = 0" )){
        echo "No se pudo realizar ping";
    }else{
        echo "Ping exitoso";
    }
?>

</body>
</html>
