<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
      <div class="message" data-closable>
         <span>' . $message . '</span>
         <i class="fa fa-window-close"></i>
      </div>
      ';
    };
};
?>

<header class="header">
    <div class="flex">
        <a href="admin.php" class="logo">Admin<span>Panel</span></a>
        <nav class="navbar">
            <a href="admin.php">Home</a>
            <a href="admin_products.php">Products</a>
            <a href="admin_orders.php">Orders</a>
            <a href="admin_users.php">Users</a>
            <a href="admin_contacts.php">Meassages</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fa fa-bars"></div>
            <div id="user-btn" class="fa fa-user"></div>
        </div>

        <div class="account-box">
            <p>Username: <span><?php echo $_SESSION['admin_name']; ?></span></p>
            <p>Email: <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
        </div>
    </div>
</header>