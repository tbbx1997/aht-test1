<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="publics/assets/css/home_index.css">
    <title>Design 1</title>
</head>

<body>
<?php require_once './templates/layouts/clients/block_clients/header.php' ?>
    <div class="wrapper">
        <div class="main-content">
            <div class="banner-panel">
                <?php require_once './templates/blocks/slider.php' ?>
            </div>
            <div class="main-content-product">
                <div class="mc-box">
                    <div class="box-mc-title">
                        <div class="mc-title">
                            <h3 id="franco">franco</h3>
                            <h2 id="featured-item">Featured items</h2>
                            <hr class="line-title"></hr>
                        </div>
                    </div>
                    <div class="mc-products">
						<?php foreach($result as $row) {?>
                        <div class="box-product">
                            <a href="product/detail<?php echo '?id='.$row['id_pd']?>"><img src="<?php echo $row['featrure_image'];?>" alt="Suspendisse id volutpat"></a>
                            <form action="user/login">
                                <button class="btn-add-cart">
                                    <span>ADD TO CART</span>
                                </button>
                            </form>
                            <h5><a href="?action=login"><?php echo $row['title'];?></a></h5>
                            <span class="star-votes">
                                <i class="far fa-star checked"></i>
                                <i class="far fa-star checked"></i>
                                <i class="far fa-star checked"></i>
                                <i class="far fa-star checked"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <p class="prices"><span class="line-thr-price">$99.00</span><span class="price"><?php echo $row['prices'];?></span>
                            </p>
                        </div>
						<?php } ?>
                    </div>
                </div>
            </div>
            <!--=========================================Blog========================================-->
            <!--================================FOOTER=================================-->
        </div>
        <?php require_once './templates/blocks/footer.php' ?>
    </div>
    <script src="js/jquery-3.6.0.min.js "></script>
    <script src="owl-carousel/js/owl.carousel.min.js "></script>
    <script src="js/script.js "></script>
</body>

</html>