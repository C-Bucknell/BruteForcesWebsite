<?php

// (A) GET THE VARIABLES
    $password1 = $_GET["password"];
    $username1 = $_GET["username"];
    $password2 = $_POST["password"];
    $username2 = $_POST["username"];


// SET Primary variables with values
if(strlen($username1) > 0)
{
  $username = $username1;
  $password = $password1;
}
else
{ 
  if(strlen($username2) >0)
  {
    $username = $username2;
    $password = $password2;  
  }
  else
  {
    $username = "blank";
    $password = "blank";  
  }
  
}

// Check that details are correct
if(($username == 'username') &&
   ($password == 'p@ssw0rd'))
{
  $logedIn = "TRUE";
}
else
{
  if(($username == 'bob') && 
     ($password == 'password99'))
  {
    $logedIn = "TRUE";
  }
  else
  {
    $logedIn = "False";
  }
}

if($logedIn == "TRUE")
{
  header("location: adminpage.php");
}
else
{
  die();
}
?>

