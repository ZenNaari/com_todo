<?php

    $con = mysql_connect("localhost", "root");
    mysql_select_db("todo",$con);

    $sql = "UPDATE todo SET status=true where id=".$_GET["id"]."";
    echo $sql;
    mysql_query($sql,$con);

    header('Location: list.php');

?>