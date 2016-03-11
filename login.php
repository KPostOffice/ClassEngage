<!DOCUtype html>
<html>
  <header>Login</header>
  <body>
    <div id=container>
      <div id=loginWindow>
        <h1>Class Engage</h1>
        <p style="color:red"><?php if($_GET["ERROR"]=="1"){echo "Username/password incorrect";}?>
        <form action="userPage.php" action="post">
          Username:<br>
          <input type="text" name="user"><br>
          Password:<br>
          <input type="password" name="pass">
          <br>
          <input value="Login" type="submit" name="login">
        </form>
      </div>
    </div>
  </body>
</html>
