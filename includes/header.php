<header id="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top__logo">
                <h1><?= $config['title']; ?></h1>
            </div>
            <nav class="header__top__menu">
                <ul>
                    <li><a href="/index.php">Главная</a></li>
                    <li><a href="pages/about_me.php">Обо мне</a></li>
                    <li><a href="<?= $config['vk_url']; ?>" target="_blank">Я Вконтакте</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <?php

    $categories = mysqli_query($dbc, "SELECT * FROM `articles_categories`");

    ?>

    <div class="header__bottom">
        <div class="container">
            <nav>
                <ul>
                    <?php

                    while ($cat = mysqli_fetch_assoc($categories)) {
                        ?>
                            <li><a href="/articles.php?categories=<?= $cat['id']; ?>"><?php echo $cat['title']; ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
