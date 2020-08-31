<table border="1px" width="100%">
	
	<tr><th>Userid</th><th>Answer</th><th>Action</th></tr>

<?php
	include 'db.php';

	$result=mysqli_query($con,"select * from usermaster");
	while($arr=mysqli_fetch_assoc($result)):
		?>
	
		<tr>
		<form method="post" action="manage.php">
		<th>.$arr["name"].</th>
		<th>.$arr["answer"].</th>;
		<td>
		<input type="hidden" value="'.$arr["username"].'" name="username" />
		<input type="submit" value="delete" name="b1" />
		<input type="submit" value="edit" name="b1" /></td>';
		echo '</form>';
		echo '</tr>';
	
?>
</table>