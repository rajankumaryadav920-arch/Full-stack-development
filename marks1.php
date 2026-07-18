<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enter the Marks</h1>
    <form>
<table>
   <tr>
    <th><label>Java</label></th>
  <th><input type="text" name="m1" value=""/></th>
</tr>

   <tr>
    <th><label>Mongo DB</label></th>
  <th><input type="text" name="m2" value=""/></th>
</tr>
    <tr>
    <th><label>PHP</label></th>
  <th><input type="text" name="m3" value=""/></th>
</tr>
   <tr>
    <th><label>DSA</label></th>
  <th><input type="text" name="m4" value=""/></th>
</tr>
   <tr>
    <th><label>TOC</label></th>
  <th><input type="text" name="m5" value=""/></th>
</tr>
<tr>
    <th colspan="2"><input type="submit" name="send" value="perform calculation"/>
</tr>
</table>
</form>
<br>
<br>
<?php
if(isset($_GET['send'])){
    //sum all number
    $add=$_GET['m1']+$_GET['m2']+$_GET['m3']+$_GET['m4']+$_GET['m5'];
    echo "Total Marks=".$add."<br>";
     //perctange
    $percentage=($add / 500)*100;
     echo "perctange=".$percentage."%";

}

?>

</body>
</html>