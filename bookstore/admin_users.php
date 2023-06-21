<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
};

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_users.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="admin_css.css">
    <title>Users</title>
</head>

<body>
    <?php include 'admin_header.php'; ?>

    <section class="users">

        <h1 class="title">Users accounts</h1>
        <div class="box-container">
            <?php
            $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
            while ($fetch_users = mysqli_fetch_assoc($select_users)) {
            ?>
            <div class="box">
                <p>Username: <span><?php echo $fetch_users['name']; ?></span></p>
                <p>Email: <span><?php echo $fetch_users['email']; ?></span></p>
                <p>User type: <span style="color:<?php if ($fetch_users['user_type'] == 'admin') {
                                                            echo '#725d47';
                                                        } ?>"><?php echo $fetch_users['user_type']; ?></span></p>
                <a href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>"
                    onclick="return confirm('delete this user?');" class="delete-btn">Delete user</a>
            </div>
            <?php
            };
            ?>
        </div>
    </section>

    <script src="admin_script.js"></script>
</body>

</html>