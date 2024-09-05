<?php 
    session_start();
    include_once "../controller/php/config.php";
        if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "header.php"; ?>

<body>

    <div class="wrapper">
        <section class="home">
            <header>
                <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <img src="/TradeChatApp/project/controller/php/images/<?php echo $row['img']; ?>" alt="" class="main-photo">
                <section class="form">
                    <div class="profile-section">
                        <a href="profile.php" class="profile-link">Entrar al Perfil</a>
                        <a href="/TradeChatApp/project/controller/php/logout.php?logout_id=<?php echo $row['unique_id'];?>" class="logout">Logout</a>
                        <div class="coins">
                            <p>Tienes: <span id="coin-count">100</span> monedas</p>
                        </div>
                        <a href="users.php" class="chat-link">Chat</a>
                    </div>
                </section>
            </header>
            <div class="search">
                <span class="text">Busca una articulo</span>
                <input type="text" placeholder="Buscar...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="home-list">
                <a href="#">
                    <div class="content">
                        <img src="resources/article.jpg" alt="">
                        <div class="details">
                            <span>Bonito juguete Funko
                            </span>
                            <p>Remato juguete funko</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </div>
    <script src="/TradeChatApp/project/controller/javascript/home.js"></script>

</body>

</html>