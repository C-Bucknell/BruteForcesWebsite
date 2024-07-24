<?php
// (A) GET THE VARIABLES


    $password1 = $_GET["password"];
    $username1 = $_GET["username"];
    $password2 = $_POST["password"];
    $username2 = $_POST["username"];


if( empty( $username1 ) ) 
{ 
    if(empty( $username2 ))
    {
      echo "<script language='javascript'>";
      echo "alert('WRONG INFORMATION')";
      echo "</script>";
      die();
    }
    else
    {
      if(($username2 == 'username') &&
            ($password2 == 'p@ssw0rd'))
      {
        $usernameCorrect ="true";
        header("location: adminpage.php");
      }
    }
}
else
{
  if(($username1 == 'username') &&
            ($password1 == 'p@ssw0rd'))
  {
    $usernameCorrect ="true";
    header("location: adminpage.php");
  }
}
?>
