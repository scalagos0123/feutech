<?php

$connect = new mysqli("52.187.113.8", "root", "feutech", "feutechdemo");
$result = $connect->query("select * from users");

?>

<html>
    <head>
        <style>
            body {
                margin-left: 20px;
            }
            table {
                border-collapse: collapse;
            }

            th, td {
                border: 1px black solid;
            }

        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($users = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                <tr>
                    <td><?php echo $users["user_id"]; ?></td>
                    <td><?php echo $users["user_name"]; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>