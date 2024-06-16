<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
  </head>
  <body>
    <?php
    include("_navbar.php");
    include("_meta.php");
    $email = "John@gmail.com";
    $new_password_input = "";


    if ($email != "John@gmail.com") {
        echo "<div class='alert alert-success' role='alert'>
        Email not found!
        </div>";
    } else {
        $new_password_input = "5487494";
        echo "<div class='alert alert-success' role='alert'>
        OK
        </div>";
    }
    ?>
  </body>
</html>