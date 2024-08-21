<!DOCTYPE html>
<html>
 
<body>
 
  <h1>Form submitted </h1>
 
  Web language: <?php
    echo htmlspecialchars($_POST['fav_language']);;
   ?>
  <br/>
  Age: <?php
    echo htmlspecialchars($_POST['age']);;
   ?>
 
</body>
</html>