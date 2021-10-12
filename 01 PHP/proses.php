<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['nama'];
    echo $name;
    $address = $_POST['alamat'];
    echo "<br>";
    echo $address;
}
?>