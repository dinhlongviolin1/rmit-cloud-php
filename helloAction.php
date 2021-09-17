<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = "Hello ";
    echo $str . $_POST["name"];
}
else {
    echo "Nothing to show!";
}
?>