<html>
<head>
<title>Student Registration Form</title>
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
  box-shadow: rgb(0 0 0 / 25%) 0px 54px 55px, rgb(0 0 0 / 12%) 0px -12px 30px, rgb(0 0 0 / 12%) 0px 4px 6px, rgb(0 0 0 / 17%) 0px 12px 13px, rgb(0 0 0 / 9%) 0px -3px 5px;
}
.file{
  font-family: Calibri; 
  color:black; 
  font-size: 22px; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  background-color: white; 
  border-collapse: collapse; 
  border: 2px solid navy;
}
table.inner{
  border: 0px
}
</style>
</head>
 
<body>
  <form method = "POST" action="action.php">
<h3>REGISTER</h3>

 
<table align ="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="fname" maxlength="30"/>

</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>MIDDLE NAME</td>
<td><input type="text" name="mname" maxlength="30"/>

</td>
</tr>

<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="lname" maxlength="30"/>

</td>
</tr>
 

<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="email" maxlength="100" /></td>
</tr>

<!----- Confirm  Email Id ---------------------------------------------------------->
<tr>
<td> CONFIRM EMAIL ID</td>
<td><input type="text" name="confirm_email" maxlength="100" /></td>
</tr>
 
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mobile" maxlength="10" />

</td>
</tr>


<!----- PASSWORD---------------------------------------------------------->
<tr>
<td>PASSWORD</td>
<td><input type="password" name="password" id="password" required>
</td>
</tr>

<tr>
<td> CONFIRM PASSWORD</td>
<td><input type="confirmpassword" name="confirm_password" id="confirm_password" required>
</td>
</tr>
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Signup" name="signup">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>


</body>
</html>