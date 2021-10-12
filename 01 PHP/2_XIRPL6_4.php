<!DOCTYPE html>
<html>
<body>

<?php
echo "<b>Perulangan<b>";
echo "</br>";
echo "</br>";
date_default_timezone_set("Asia/Jakarta");
echo date("d-m-Y H:i");
echo "</br>";
echo "</br>";
for($i=0;$i<=6;$i++){
for($j=6-$i;$j>=1;$j--){
echo "*";
}
echo "</br>";
}
?>
</body>
</html>