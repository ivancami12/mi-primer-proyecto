<?php
    session_start();
    // Check if username and password are correct
    if($_POST['username'] === 'usuario' && $_POST['password'] === 'contraseña') {
        $_SESSION['username'] = $_POST['username'];
        header("Location: welcome.php");
    } else {
        echo "Incorrect username or password. <a href='index.php'>Try again</a>";
    }
?>
