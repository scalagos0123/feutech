<?php

$connect = new mysqli("52.187.113.8", "root", "feutech", "feutechdemo");
$result = $connect->query("select * from users");

?>

<html>
    <body>
        <p>Hello World 2</p>
    </body>
</html>