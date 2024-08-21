<!DOCTYPE html>
<html>
 
<body>
 
  <h1>Form submitted </h1>
 
  email: <?php
    echo htmlspecialchars($_POST['email']);;
   ?>
  <br/>
  Password: <?php
    echo htmlspecialchars($_POST['psw']);;
   ?>
  <br/>
  Repeat-password: <?php
    echo htmlspecialchars($_POST['psw-repeat']);;
   ?>
 
</body>
</html>