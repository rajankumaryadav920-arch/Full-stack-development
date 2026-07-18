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
  <th><input type="text" name="n1" value="" placeholder="Enter a Number"/></th>
</tr>
<tr>
    <th colspan="2"><input type="submit" name="n2" value="print table"/></th>
</tr>
</table>
</form>
<?php
if(isset($_GET['n2'])){
    $num=$_GET['n1'];
    for($i=1;$i<=10;$i++){
        echo  "<br>".$num."x".$i."=".$num*$i;
    }
}



?>




</body>
</html>