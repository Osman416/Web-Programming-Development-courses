<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

</head>
<body>
    <h2>Lab 2</h2>
    <br>
        <form name="lab2" method="get">
            <input type="hidden" name="FirstName" value="Osman">
            <input type="hidden" name="LastName" value="Osman">
            <input type="hidden" name="SN" value="100962928">
            <input type="hidden" name="Color" value="green">
            <button type="submit">Submit</button>
        </form>
        <br>
<a href="prelab2/prelab2.php"> Prelab 2 </a>
<?php
// VARIABLES 
    $name=$_GET['FirstName'];
    $last=$_GET['LastName'];
    $sn=$_GET['SN'];
    $background=$_GET['Color'];
    $row = "10";
    $col = "10"; 
    $tnum = "1"; 

// SELECTION STATEMENT 
    if(isset($name) && ($last) && ($sn) && ($background)) {

// PART TWO 
        echo " <h1> " . $name . " " . $last . " : " . $sn . "</h1> <br>"; 

     $styleBlock = sprintf('
        <style type="text/css">
               body {
             background-color:' . $background . '}
        </style>', $background);
          echo $styleBlock;

// PART THREE
        echo '<table>'; 
        for($r = 0; $r < 10; $r++){ 
            echo '<tr>';
            for($c = 0; $c < 10; $c++){ 
                if($c % 2 == 0){ 
                    echo '<td style="background-color:' . $background . ' style="border:2px solid black">' . $tnum++ . '</td>';    
                }
                else{ 
                    echo '<td style="background-color:white" style="border:2px solid black">' . $tnum++ . '</td>'; 
                }
            }
            echo '</tr>'; 
        }
        echo '</table>';
    }
?>
<br>
<br><hr>
<?php
   show_source(__FILE__); 
?>
</body>
</html>