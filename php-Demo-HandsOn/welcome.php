<!DOCTYPE html>
<html>
 
<body>
 
  <h1>Form submitted </h1>
 
  Name: <?php
    echo htmlspecialchars($_POST['name']);;
   ?>
  <br/>
  Email: <?php
    echo htmlspecialchars($_POST['email']);;
   ?>
 
</body>
</html>