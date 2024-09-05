<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php include_once "header.php";?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>TradeAppChat</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="field input">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="field input">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Continue to Chat">
            </div>
            </form>
            <div class="link">Aun no estas registrado? <a href="index.php">Registrate ahora</a></div>
        </section>
    </div>

    <script src = "/TradeChatApp/project/controller/javascript/pass-show-hide.js"></script>
    <script src = "/TradeChatApp/project/controller/javascript/login.js"></script>

</body>
</html>