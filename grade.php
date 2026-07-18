<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
<form>
<table>
   <tr>
    <th><label>Marks</label></th>
  <th><input type="text" name="g1" value="" placeholder="Enter a marks"/></th>
</tr>
<tr>
    <tr>
    <th colspan="2"><input type="submit" name="rec" value="Grade"/>
</tr>
</table>
</form>
<?php
if(isset($_GET['rec'])){
    if($_GET['g1']>90){
        echo "grade A+";
    }
    elseif($_GET['g1']>80){
        echo "grade A";
    }
    elseif($_GET['g1']>70){
        echo "grade B+";
    }
    elseif($_GET['g1']>60){
        echo "grade B";
    }
    elseif($_GET['g1']>50){
        echo "grade C";
    } 
    else{
        echo "Pass";
    }
}



?>
<br>
</body>
</html>