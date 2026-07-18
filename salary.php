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
    <th><label>Employee</label></th>
  <th><input type="text" name="s1" value="" placeholder="Enter Employee Salary"/></th>
</tr>

   <tr>
    <th><label>HRA</label></th>
  <th><input type="text" name="s2" value="" placeholder="Enter HRA Salary"/></th>
</tr>
   <tr>
    <th><label>DA</label></th>
  <th><input type="text" name="s3" value="" placeholder="Enter DPA Salary"/></th>
</tr>
<tr>
    <th colspan="2"><input type="submit" name="rec" value="Total Salary"/>
</tr>
</table>
</form>
<?php
if(isset($_GET['rec'])){
    $total=$_GET['s1']+$_GET['s2']+$_GET['s3'];
    echo "Total salary=".$total;
}
?>
</body>
</html>