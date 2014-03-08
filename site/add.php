<html>
<body>

<form target=site action=add.php method=post>
	<table>
		<tr>
			<td>Task name:</td><td><input type=text name=n></td>
		</tr>
		<tr>
			<td>Due Date:</td>
			<td><select name=year>
				
				<?php
					for($i=0;$i<5;$i++)
					{
						echo "<option value=".(date('Y')+$i).">".(date('Y')+$i)."</option>";

					}

				?>
			</select>

			<select name=month>
				<?php

					for($i=1;$i<13;$i++)
					{
						echo "<option value=".$i.">".$i."</option>";
					}

				?>
			</select>

			<select name=day>
				<?php

					for($i=1;$i<32;$i++)
					{
						echo "<option value=".$i.">".$i."</option>";
					}

				?>
			</select></td>
		</tr>

		<tr><td><input type=submit value=Submit></td></tr>

		<tr><td><a href=list.php target=site>Back</a></td></tr>
		</table>



</form>


<?php

if(isset($_POST["n"])==true)
{
    $con = mysql_connect("localhost", "root");
    mysql_select_db("todo",$con);

    $sql = "insert into todo values('', '', ".$_POST["n"]."', '".$_POST["year"]."/".$_POST["month"]."/".$_POST["day"]."')";
    echo $sql;
    mysql_query($sql,$con);
}
    

?>


</body>
</html>