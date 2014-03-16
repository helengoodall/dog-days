<?php 
 session_start(); 
// Check if we have established an authenticated 
if (!isset($_SESSION["authenticatedUser"])) 
{ 
     $_SESSION["message"] = "Please Login"; 
     header("Location: login1.php"); //Go back and login 
} 
//If this page hasn't been redirected (we are allowed in) then we can display 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>Protected Page</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
</head> 
<body> 
<table width="703" border="0" cellpadding="0" cellspacing="0"> 
  <tr>  
    <td width="161" height="13"></td> 
    <td width="524"></td> 
    <td width="18"></td> 
  </tr> 
  <tr>  
    <td height="48" valign="top"><p><a href="logout.php">Logout</a></p> 
    <p>(cancels the session) </p></td> 
    <td valign="top"><h1 align="center">Protected Page</h1> 
    </td> 
    <td></td> 
  </tr> 
  <tr>  
    <td height="339" valign="top"><p>&nbsp;</p> 
      <p>&nbsp;</p> 
      <p>&nbsp;</p> 
      <p>&nbsp;</p></td> 
      <td valign="top"> 
      <p>&nbsp;</p> 
      <h2>You must be logged in to see this page.</h2> 
    <p>Your session variables are as follows:</p> 
    <?php print "<p>email = ".$_SESSION["authenticatedUser"]."</p>"; 
          print "<p>user_id = ".$_SESSION['user_id']."</p>"; 
     ?> 
    </p></td> 
    <td></td> 
  </tr> 
  <tr>  
    <td height="103">&nbsp;</td> 
    <td>&nbsp;</td> 
    <td></td> 
  </tr> 
</table> 
</body> 
</html>