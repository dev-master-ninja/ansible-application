<?php

require_once("lib/database.php");
require_once("lib/userlist.php");

$db = new database();
$ul = new userlist($db->getConnection());
$data = $ul->getPhonebook();

?>
<html>
    <head>
        <title>Phonebook</title>
    </head>
    <body>
        <h1>Email Directory</h1>
        <table width="25%">
            <thead>
                <tr>
                    <th style="text-align:left">First name</th>
                    <th style="text-align:left">Last name</th>
                    <th style="text-align:left">Email address</th>
                </tr>
            </thead>
            <?php 
              foreach($data as $record) {
                echo "<tr>";
                echo "<td>" . $record['first_name'] . "</td>";
                echo "<td>" . $record['last_name'] . "</td>";
                echo "<td>" . $record['email'] . "</td>";
                echo "</tr>";
              }
            ?>
        </table>
    </body>
</html>
