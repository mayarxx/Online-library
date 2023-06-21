<?php

include 'config.php';

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $user_type = $_POST['user_type'];

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {
        $message[] = 'User already exist!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'Confirm password not matched!';
        } else {
            mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
            $message[] = 'Registered successfully!';
            header('location:login.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign up</title>
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
            <h3>Sign up</h3>
            <label for="name">Name
                <input id="name" type="text" name="name" placeholder="Enter your name" required class="box">
            </label>
            <label for="email">E-mail
                <input type="emai" name="email" placeholder="Enter your email" required class="box">
            </label>
            <label for="pass">Password
                <input id="pass" type="password" name="password" placeholder="Enter your password" required class="box">
            </label>
            <label for="cpass">Confirm Password
                <input type="password" name="cpassword" placeholder="Confirm your password" required class="box">
            </label>
            <select name="user_type" class="box">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="Sign up" class="btn">
            <p>Already have an account? <a href="login.php">Login now!</a></p>
        </form>
    </div>
</body>

</html>