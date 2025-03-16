<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EasyGifts - Blog - Jakie gadżety na 2025 rok? Najnowsze trendy i topowe propozycje!</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/common/topbar.php"; ?> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
        <main id="main-wrapper">
            <div class="breadcrumbs container">
                <ul>
                    <li class="breadcrumb-item">
                        <a href="./index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Blog</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span>Jakie gadżety na 2025 rok? Najnowsze trendy i topowe propozycje!</span>
                    </li>
                </ul>
            </div>
            <div class="blog-article-row container">
                <div class="blog-article-col-wide">
                    <?php include "./components/blog_article/blog_article_hero.php"; ?>
                    <?php include "./components/blog_article/blog_article_content.php"; ?>
                </div>
                <aside class="blog-article-col-short">
                    <?php include "./components/blog_article/blog_article_more_news.php"; ?>
                </aside>
            </div>
        </main>
        <footer> 
            <?php include "./components/common/footer.php"; ?> 
        </footer>
        <script>
            document.querySelector('#topbar .container .topbar-links a:nth-of-type(4)').classList.add('active')
        </script>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>