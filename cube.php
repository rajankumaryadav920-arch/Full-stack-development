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
    <th><label>Number</label></th>
  <th><input type="text" name="n1" value="" placeholder="Enter  Number"/></th>
</tr>
  <tr>
    <th colspan="2"><input type="submit" name="rec" value="Number"/>
</tr>
</table>
</form>
</body>
<?php
if(isset($_GET['rec'])){
    $cube=$_GET['n1']*$_GET['n1']*$_GET['n1'];
    echo  "Cube:".$cube;
}

?>
</html>
