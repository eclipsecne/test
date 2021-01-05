<!DOCTYPE html>
<html>
<body>

<?php
echo exec('ping 192.168.1.76', $output);
print_r($output);
?>

</body>
</html>
