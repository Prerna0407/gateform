<?php
include 'connect.php';
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>GATEFORM</title>
<style>
  h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:black; 
  font-size: 22px; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  background-color: white; 
  border-collapse: collapse; 
  border: 2px solid navy;
  width: 30%;
    height: 30%;
    background-color: white;
    border-collapse: collapse;
    border: 2px solid navy;
    box-shadow: rgb(0 0 0 / 25%) 0px 54px 55px, rgb(0 0 0 / 12%) 0px -12px 30px, rgb(0 0 0 / 12%) 0px 4px 6px, rgb(0 0 0 / 17%) 0px 12px 13px, rgb(0 0 0 / 9%) 0px -3px 5px;

}
table.inner{
  border: 0px
}
</style>
</head>
 
<body>
  <form  method="POST" action="action.php">
<h3>LOGIN, IF ALREADY REGISTERED</h3>

 
 <table align ="center" cellpadding = "10">

<tr>
<td>EMAIL ID</td>
<td><input type="text" name="email" maxlength="100" /></td>
</tr>

<td>PASSWORD</td>
<td><input type="password" name="password" id="psw" required>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="login" name="login">
<input type="reset" value="Reset">
</td>
</tr>
</table> 

 
</form>
 
</body>
</html>