<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<style>
* {
	font-family: 'Lato', sans-serif;
}
</style>
</head>
<body>
	<h2>PreLab 2</h2>
	<br>
<form name="lab2" method="get">

	First Name: <input type="hidden" name="FirstName" value="Osman"><br>
	Last  Name: <input type="hidden" name="LastName" value="Osman"><br>
	Student Number: <input type="hidden" name="SN" value="100962928"><br>
	Color Name: <input type="text" name="Color"><br><br>
	        <br> 
        <select name="rows"> 
            <option selected> Rows </option>
            <option value="1"> 1</option>
            <option value="2"> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            <option value="5"> 5</option>
            <option value="6"> 6</option>
            <option value="7"> 7</option>
            <option value="8"> 8</option>
            <option value="9"> 9</option>
            <option value="10"> 10</option>
        </select>
        <br>
        <select name="col"> 
            <option selected> Columns </option>
            <option value="1"> 1</option>
            <option value="2"> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            <option value="5"> 5</option>
            <option value="6"> 6</option>
            <option value="7"> 7</option>
            <option value="8"> 8</option>
            <option value="9"> 9</option>
            <option value="10"> 10</option>
        </select>
        <br> 
        <button type="submit">Submit</button>
        <hr> 
</form>
<?php
	$name=$_GET['FirstName'];
	$last=$_GET['LastName'];
	$sn=$_GET['SN'];
	$rows = $_GET["rows"]; 
    $cols = $_GET["col"]; 
    $color = $_GET['color'];

        echo " <h1> " . $name . " " . $last . " : " . $sn . "</h1> <br>"; 
        
        echo "<table >";  
        for($r = 0; $r < $rows ; $r++){ 
            echo "<tr>"; 
            for($c = 0; $c < $cols ; $c++){ 
                if($r % 2 == 0){ 
                    echo "<td style='border: " .  $color . "  1px solid'> " .  $name  . "  </td>";
                }
                else if($r / 2 != 0){ 
                     echo "<td style='border: " .  $color . "  1px solid'> " .  $last  . "  </td>";
                }
            }
            echo "</tr>"; 
        }
        echo "</table>"; 
?>
<br><hr>
<?php
   show_source(__FILE__); 
?>
</body>
</html>
