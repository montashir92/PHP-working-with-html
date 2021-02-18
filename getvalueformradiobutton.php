
<?php
//Radio button validation step one.
if(isset($_POST['gender'])){
    $gen = $_POST['gender'];
    echo "Gender is :".$gen;
}
?>

<?php
if(isset($_POST['gender'])){
    $gen = $_POST['gender'];
   if($gen == "Male"){
       echo "You are a Male";
   }
    elseif($gen == "Female"){
        echo "You are a Female";
    }
    else{
        echo "Others";
    }
}
?>
<div id="demo"></div>
<form action="" method="post" name="myform" id="myform">
	<table>
		<tr>
			<td>Gendder :</td>
			<td>
                            <input type="radio" name="gender" value="Male"/>Male
                            <input type="radio" name="gender" value="Female"/>Female
                            <input type="radio" name="gender" value="Others"/>Others
                    </td>
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
