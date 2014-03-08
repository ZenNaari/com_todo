<?php error_reporting(E_ERROR | E_PARSE); ?>
<html>
<body>

<form target=site action=add.php>
	<input type=submit value="Add Task">
</form>

<?php

    $con = mysql_connect("localhost", "root");
    mysql_select_db("todo",$con);

    $sql = "select * from todo";
    $result = mysql_query($sql,$con);

 	if( mysql_result( $result, 0, 0 )==null )
 	{
 		echo "No Tasks";
 	}

 	else
 	{
 		echo "<table>";
 		for($i=0; $i<mysql_num_rows($result); $i++)
    	{
       		echo "<tr>";
       		echo "<td><input type=button value=Done onclick=window.location.assign('update.php?id=".mysql_result($result, $i, 0)."')>";
        	for($j=2; $j<mysql_num_fields($result); $j++)
        	{

        		if(mysql_result($result, $i, 1)==true)
        		{
        			
            		echo "<td><del>";
            		echo mysql_result($result, $i, $j);
            		echo "</del></td>";
            	}

            	else
            	{
            		echo "<td>";
            		echo mysql_result($result, $i, $j);
            		echo "</td>";
            	}

        	}
        	echo "</tr>";
    	}
    	echo "</table>";
 	}

    

?>


</body>
</html>