
<?php
  $siteType=0;
  if(empty($_POST))
  {
    header("Location = 'login.php?ERROR=1'");
  }
  if($_POST["user"]=="teacher")
  {
    if($_POST["pass"]=="password")
    {
      $siteType=1;
    }
  }
  else if($_POST["user"]=="Kevin")
  {
    if($_POST["pass"]=="password")
    {
      $siteType=2;
    }
  }
  if($siteType==0)
  {
    header("Location = 'login.php?ERROR=1'");
  }
?>
<!DOCTYPE html>
<html>
  <header>UserPage</header>
  <!--<link type="text/css" rel="stylesheet" href="stylesheet.css"/>-->
  <body>
    <h1><?php if($siteType==1)
              {
                echo "I'm a teacher";
              }
              else
              {
                echo "I am a student";
              } 
        ?>
    </h1>
  </body>
</html>
