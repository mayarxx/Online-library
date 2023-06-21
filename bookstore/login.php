<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {

        $row = mysqli_fetch_assoc($select_users);

        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_email'] = $row['email'];
            $_SESSION['admin_id'] = $row['id'];
            header('location:admin.php');
        } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            header('location:home.php');
        }
    } else {
        $message[] = 'Incorrect email or password!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>

<body>

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '
      <div class="message" data-closable>
         <span>' . $message . '</span>
         <i class="fa fa-window-close" aria-hidden="true"></i>
      </div>
      ';
        }
    }
    ?>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <label for="email">E-mail
                <input type="emai" name="email" placeholder="Enter your email" required class="box">
            </label>
            <label for="pass">Password
                <input id="pass" type="password" name="password" placeholder="Enter your password" required class="box">
            </label>
            <input type="submit" name="submit" value="Login" class="btn">
            <p>Don't have an account yet? <a href="register.php">Sign up now!</a></p>
        </form>
    </div>
</body>

</html>