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
        <section class="profile">
            <header>
                <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="profile-header">
                    <img src="/TradeChatApp/project/controller/php/images/<?php echo $row['img']; ?>" class="profile-photo">
                    <div class="details">
                        <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
                        <p><?php echo $row['status']; ?></p>
                        <p class="bio">Esta es la biografía del usuario. Aquí se puede incluir una breve descripción del
                            perfil.</p>
                    </div>
                    <section class="form">
                        <div class="profile-section">
                            <a href="/TradeChatApp/project/controller/php/logout.php?logout_id=<?php echo $row['unique_id'];?>" class="logout">Logout</a>
                            <div class="coins">
                                <p>Tienes: <span id="coin-count">100</span> monedas</p>
                            </div>
                        </div>
                    </section>
                </div>
            </header>
            <section class="users">
                <header>
                    <h2>Mis Publicaciones</h2>
                </header>
                <div class="profile-post-list">
                    <div class="search">
                        <span class="text">Busca una articulo</span>
                        <input type="text" placeholder="Buscar...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <a href="#">
                        <div class="content">
                            <img src="resources/profile-article.jpg" alt="Publicación 1">
                            <div class="details">
                                <span>Gengar PSA 10</span>
                                <p>Carta de Pokemon de Gengar PSA10</p>
                            </div>
                        </div>
                        <div class="content">
                            <img src="resources/profile-article-2.jpg" alt="Publicación 1">
                            <div class="details">
                                <span>Pantera Hoodie Talla L</span>
                                <p>Sudadero de la banda de Metal Pantera</p>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </section>
    </div>

    <script src="/TradeChatApp/project/controller/javascript/profile.js"></script>

</body>

</html>