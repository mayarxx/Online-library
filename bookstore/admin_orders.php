<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
};

if (isset($_POST['update_order'])) {
    $order_update_id = $_POST['order_id'];
    $update_payment = $_POST['update_payment'];
    mysqli_query($conn, "UPDATE `orders` SET payment_status ='$update_payment' WHERE id = '$order_update_id'") or die('query failed');
    $message[] = 'Payment status has been updated!';
};

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_orders.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="admin_css.css">
    <title>Orders</title>
</head>

<body>
    <?php include 'admin_header.php'; ?>
    <section class="orders">
        <h1 class="title">Placed prders</h1>

        <div class="box-container">
            <?php
            $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
            if (mysqli_num_rows($select_orders) > 0) {
                while ($fetch_orders = mysqli_fetch_assoc($select_orders)) {
            ?>
            <div class="box">
                <p>User id: <span><?php echo $fetch_orders['user_id']; ?></span></p>
                <p>Placed on: <span><?php echo $fetch_orders['placed_on']; ?></span></p>
                <p>Name: <span><?php echo $fetch_orders['name']; ?></span></p>
                <p>Number: <span><?php echo $fetch_orders['number']; ?></span></p>
                <p>Email: <span><?php echo $fetch_orders['email']; ?></span></p>
                <p>Address: <span><?php echo $fetch_orders['address']; ?></span></p>
                <p>Total products: <span><?php echo $fetch_orders['total_products']; ?></span></p>
                <p>Total price: <span>$<?php echo $fetch_orders['total_price']; ?>/-</span></p>
                <p>Payment method: <span><?php echo $fetch_orders['method']; ?></span></p>

                <form method="POST">
                    <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
                    <select name="update_payment">
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                    </select>
                    <input type="submit" value="update" name="update" class="option-btn">
                    <a href="admin_orders.php?delete=<?php echo $fetch_orders['id']; ?>"
                        onclick="return confirm('delete this order?');" class="delete-btn">Delete order</a>
                </form>
            </div>
            <?php
                }
            } else {
                echo '<p class="empty"> No orders placed yet!</p>';
            }
            ?>
        </div>
    </section>





    <script src="admin_script.js"></script>
</body>

</html>