<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
};

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `meassage` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_contacts.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="admin_css.css">
    <title>Contacts</title>
</head>

<body>
    <?php include 'admin_header.php'; ?>

    <section class="messages">

        <h1 class="title">Messages</h1>
        <div class="box-container">
            <?php
            $select_message = mysqli_query($conn, "SELECT * FROM `meassage`") or die('query failed');
            if (mysqli_num_rows($select_message) > 0) {
                while ($fetch_message = mysqli_fetch_assoc($select_message)) {
            ?>
            <div class="box">
                <p>Name: <span><?php echo $fetch_message['name']; ?></span></p>
                <p>Number: <span><?php echo $fetch_message['number']; ?></span></p>
                <p>Email: <span><?php echo $fetch_message['email']; ?></span></p>
                <p>Message: <span><?php echo $fetch_message['meassage']; ?></span></p>
                <a href="admin_contacts.php?delete=<?php echo $fetch_message['id']; ?>"
                    onclick="return confirm('delete this message?');" class="delete-btn">Delete message</a>
            </div>
            <?php
                };
            } else {
                echo '<p class="empty">You have no messages yet!</p>';
            }
            ?>
        </div>
    </section>

    <script src="admin_script.js"></script>
</body>

</html>