<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EasyGifts - E-Ulotka</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/swiper-bundle.css" />
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./css/magnific-popup.min.css">
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
                        <a href="./index.php">Strona główna</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span>Generator ulotek PDF</span>
                    </li>
                </ul>
            </div>
            <?php include "./components/e_leaflet/e_leaflet_wrapper.php"; ?>  
        </main>
        <footer> 
            <?php include "./components/common/footer.php"; ?> 
        </footer>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/swiper/swiper-bundle.js"></script>
        <script src="./js/products_card_gallery/products_card_gallery.js"></script>
        <script src="./js/jquery.magnific-popup.min.js"></script>
        <script>
            $(document).ready(function() {
                 $(".product-download").click(function(e){
                    e.preventDefault(); 

                    var imageUrl = $(this).closest(".swiper-slide").find("img").attr("src");

                    var downloadLink = document.createElement("a");
                    downloadLink.href = imageUrl;
                    downloadLink.download = "product_image.jpg";
                    downloadLink.style.display = "none";
                    document.body.appendChild(downloadLink);
                    downloadLink.click();
                    document.body.removeChild(downloadLink);
                });
                
                $('.zoom-image').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    },
                });

                $('.zoom-icon').on('click', function() {
                    $(this).closest('.swiper-slide').find('.zoom-image').magnificPopup('open');
                });
            });
        </script>
    </body>
</html>