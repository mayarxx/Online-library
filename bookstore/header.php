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
    <div class="header-1">
        <div class="flex">
            <div class="share">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
            <p>New <a href="login.php">login</a> | <a href="register.php">Register</a></p>
        </div>
    </div>

    <div class="header-2">
        <div class="flex">
            <a href="home.php" class="logo">Your Book</a>

            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="shop.php">Shop</a>
                <a href="contacts.php">Contacts</a>
                <a href="orders.php">Orders</a>
            </nav>

            <div class="icons">
                <div id="menu-btn" class="fa fa-bars"></div>
                <a href="search_page.php" class="fa fa-search"></a>
                <div id="user-btn" class="fa fa-user"></div>
                <?php
                $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                $cart_rows_number = mysqli_num_rows($select_cart_number);
                ?>
                <a href="cart.php"> <i class="fa fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span>
                </a>
            </div>
            <div class="user-box">
                <p>Username: <span><?php echo $_SESSION['user_name']; ?></span></p>
                <p>Email: <span><?php echo $_SESSION['user_email']; ?></span></p>
                <a href="logout.php" class="delete-btn">Logout</a>
            </div>
        </div>
    </div>

</header>