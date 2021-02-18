
<?php
//Get data table form in PHP.
    if(isset($_POST['submit'])){
        $name     = $_POST['name'];
        $gender   = $_POST['gender'];
        $dep      = $_POST['dep'];
        $coder    = $_POST['coder'];
    

?>


<table class="tblone">
    <tr>
        <td colspan="2" align="center">Output</td>
    </tr>
    
    <tr>
        <td>Name </td>
        <td><?php echo $name; ?></td>
    </tr>
    
    <tr>
        <td>Gender </td>
       
            <?php
            
            if($gender == "Male"){?>
                <td><?php echo "Male"; ?></td>
            <?php }elseif($gender == "Female"){?>
                <td><?php echo "Female"; ?></td>
            <?php }?>
    </tr>
    
    <tr>
        <td>Department </td>
       
            <?php
            
            if($dep == "CSE"){?>
                <td><?php echo "CSE"; ?></td>
            <?php }elseif($dep == "Physics"){?>
                <td><?php echo "Physics"; ?></td>
            <?php } elseif($dep == "Maths"){?>
                <td><?php echo "Maths"; ?></td>?>
        <?php }?>
       
    </tr>
    
    <tr>
        <td>Coder </td>
        <td>
            <?php echo $coder; ?>
        </td>
    </tr>
</table>

<?php }?>

<form action="" method="post"name="myform" id="myform" >
	<table>
		<tr> 
        <td>Name</td>
        <td><input type="text" name="name" required="1"/></td>
        </tr>
            
        <tr> 
            <td>Gender </td>
            <td>
                <input type="radio" name="gender" value="Male"/>Male
                <input type="radio" name="gender" value="Female"/>Female
            </td>
        </tr>
            
        <tr> 
			<td>Department</td>
			<td>
				<input type="checkbox" name="dep" value="CSE"/>CSE
				<input type="checkbox" name="dep" value="Physics"/>Physics
				<input type="checkbox" name="dep" value="Maths"/>Maths
			</td>
        </tr>
        <tr>
            
            <td>Coder </td>
            <td>
                <select name="coder" required="1">
                    <option value="">Select One</option>
                    <option value="JAVA">JAVA</option>
                    <option value="PHP">PHP</option>
                    <option value="C#">C#</option>
                            
                </select>
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

