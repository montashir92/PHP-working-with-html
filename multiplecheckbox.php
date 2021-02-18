
<?php
//Not a Multiple check box.
if(isset($_POST['submit'])){
    $coder = $_POST['coder'];
    echo $coder;
}
?>




<form action="" method="post" name="myform" id="myform" >
	<table>
		<tr>
			<td>Language :</td>
			<td>
                            <input type="checkbox" name="coder" value="PHP"/>PHP
                            <input type="checkbox" name="coder" value="JAVA"/>JAVA
                            <input type="checkbox" name="coder" value="C#"/>C#
                    </td>
		</tr>
		 
		<tr>
			<td></td>
			<td> 
			<input type="submit" name="submit" value="Submit"/>
			<input type="reset" value="Clear"/>
			</td>
		</tr>
	</table>
</form>



<?php

//It's Mulltiple check box in php.
if(isset($_POST['submit'])){
    $coder = $_POST['coder'];
    echo "You have selected ";
    foreach($coder as $lang=>$value){
        echo $value.", ";
    }
}
?>




<form action="" method="post" name="myform" id="myform" >
	<table>
		<tr>
			<td>Language :</td>
			<td>
                            <input type="checkbox" name="coder[]" value="PHP"/>PHP
                            <input type="checkbox" name="coder[]" value="JAVA"/>JAVA
                            <input type="checkbox" name="coder[]" value="C#"/>C#
                    </td>
		</tr>
		 
		<tr>
			<td></td>
			<td> 
			<input type="submit" name="submit" value="Submit"/>
			<input type="reset" value="Clear"/>
			</td>
		</tr>
	</table>
</form>

