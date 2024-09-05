<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>TradeAppChat</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                <div class="field input">
                    <label>Nombre</label>
                    <input type="text" name="fname" placeholder="Nombre" required>
                </div>
                <div class="field input">
                    <label>Apellido</label>
                    <input type="text" name="lname" placeholder="Apellido" required>
                </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Seleccionar Imagen</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                    <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Ya estas registrado? <a href="login.php">Ingresa</a></div>
        </section>
    </div>

    <script src="../controller/javascript/pass-show-hide.js"></script>
    <script src="../controller/javascript/signup.js"></script>

</body>
</html>
