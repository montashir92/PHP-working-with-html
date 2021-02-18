
<?php
//Form Validation.
if(isset($_POST['username'])){
	echo "User name is : ".$_POST['username'];
}

?>

<?php
if(isset($_POST['username'])){
	$name = $_POST['username'];
	echo "User name is : ".$name;
}


?>



//Write here HTML file...


<form action="" method="post" name="myform" id="myform">
	<table>
		<tr>
			<td>Username :</td>
			<td><input type="text" name="username" required="1"/></td>
		</tr>
		
		<tr>
			<td></td>
			<td> 
			<input type="submit" value="Submit"/>
			<input type="reset" value="Clear"/>
			</td>
		</tr>
	</table>
</form>
