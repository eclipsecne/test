<!DOCTYPE html>
<html>
<body>

<?php
$salida = shell_exec('ping 192.168.1.76');
echo "<pre>$salida</pre>";
?>

</body>
</html>
