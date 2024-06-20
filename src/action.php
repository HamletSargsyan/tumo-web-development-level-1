<?php
if (isset($_POST['register'])) {
    header("Location: index.php");
    exit();
} elseif (isset($_POST["login"])) {
    header("Location: index.php");
    exit();
}
?>
