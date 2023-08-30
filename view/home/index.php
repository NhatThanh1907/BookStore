<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - EduBook</title>
    <script src="view/home/js/jquery-3.3.1.js"></script>
    <script src="view/home/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="view/home/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/home/fonts/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/home/css/style.css">
    <link rel="stylesheet" href="view/home/css/home.css">
</head>
<body>
    <div class="app">
        <header id="header">
        <!-- header top -->
        <div class="header__top">
            <div class="container">
                <section class="row flex">
                    <div class="col-lg-5 col-md-0 col-sm-0 heade__top-left">
                        <span>EduBook - Cội nguồn của tri thức</span>
                    </div>

                    <nav class="col-lg-7 col-md-0 col-sm-0 header__top-right">
                        <ul class="header__top-list">
                            <li class="header__top-item">
                                <a href="index.php?controller=user&action=login" class="header__top-link">Đăng nhập</a>
                            </li>
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">Đăng ký</a>
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
        <!--end header top -->

        <!-- header bottom -->
        <div class="header__bottom">
            <div class="container">
                <section class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 header__logo">
                        <h1 class="header__heading">
                            <a href="#" class="header__logo-link">
                                <img src="view/home/images1/logo1.png" alt="Logo" class="header__logo-img">
                            </a>
                        </h1>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-0 header__search">
                        <select name="" id="" class="header__search-select">
                            <?php foreach ($array['categories'] as $cat) { ?>
                            <option value="1"> <a href="index.php?controller=home&action=category&id=<?=$cat['id']?>" class="header__nav-link"><?=$cat['name']?></a></option>

                            <?php }?>
                        </select>
                        <form method="post" action="index.php?controller=home">
                            <input type="text" class="header__search-input" name="search" value="<?=$array['search']?>" placeholder="Tìm kiếm tại đây...">
                            <button class="header__search-btn">
                                <div class="header__search-icon-wrap">
                                    <i class="fas fa-search header__search-icon"></i>
                                </div>
                            </button>
                        </form>
                    </div>

                    <div class="col-lg-2 col-md-0 col-sm-0 header__call">
                        <div class="header__call-icon-wrap">
                            <i class="fas fa-phone-alt header__call-icon"></i>  
                        </div>
                        <div class="header__call-info">
                            <div class="header__call-text">
                                Gọi điện tư vấn
                            </div>
                            <div class="header__call-number">
                                039.882.3232
                            </div>
                        </div>
                    </div>

                    <a href="index.php?controller=home&action=cart" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                        <div class="header__cart-icon-wrap">
                            <span class="header__notice">4</span>
                            <i class="fas fa-shopping-cart header__nav-cart-icon"></i>
                        </div>
                    </a>
                </section>
            </div>   
        </div>
        <!--end header bottom -->

        <!-- header nav -->
        <div class="header__nav">
            <div class="container">
                <section class="row">
                    <div class="header__nav-menu-wrap col-lg-3 col-md-0 col-sm-0">
                        <i class="fas fa-bars header__nav-menu-icon"></i>
                        <div class="header__nav-menu-title">Danh mục sản phẩm</div>
                    </div>

                    <div class="header__nav col-lg-9 col-md-0 col-sm-0">
                        <ul class="header__nav-list">
                            <li class="header__nav-item">
                                <a href="index.html" class="header__nav-link">Trang chủ</a>
                            </li>

                            <li class="header__nav-item">
                                <a href="view/home/contact.php" class="header__nav-link">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <!--end header nav -->

    <!-- slide - menu list -->
    <section class="menu-slide">
        <div class="container">
            <div class="row">
                <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                    <ul class="menu__list">
                        <?php foreach ($array['categories'] as $cat) { ?>
                            <li class="menu__item menu__item--active">
                                <a href="index.php?controller=home&action=category&id=<?=$cat['id']?>" class="menu__link">

                                   <?=$cat['name']?></a>
                            </li>
                        <?php }?>
                      
                    </ul>
                </nav>

                <div class="slider col-lg-9 col-md-12 col-sm-0">
                    <div class="row">
                        <div class="slide__left col-lg-8 col-md-0 col-sm-0">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                <!-- <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol> -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="view/home/images1/banner/363488_final1511.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="view/home/images1/banner/Gold_DongA_600X350.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="view/home/images1/banner/megabook-glod600X350.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="slide__left-bottom">
                                <div class="slide__left-botom-one">
                                    <img src="view/home/images1/banner/363107_05.jpg" class="slide__left-bottom-one-img">
                                </div>
                                <div class="slide__left-bottom-two">
                                    <img src="view/home/images1/banner/363104_06.jpg" class="slide__left-bottom-tow-img">
                                </div>
                            </div>
                        </div>

                        <div class="slide__right col-lg-4 col-md-0 col-sm-0">
                            <img src="view/home/images1/banner/slider-right.png" class="slide__right-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slide menu list -->
<!-- score-top-->

<button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></i></button>
    <!-- bestselling product -->

    <!-- end bestselling product -->

    <!-- product -->
        <form action="">
    <section class="product">
        <div class="container" >
            <div class="row">
                <aside class="product__sidebar col-lg-3 col-md-0 col-sm-12">
                    <div class="product__sidebar-heading">
                        <div class=""></div>
                        <h2 class="product__sidebar-title">
                        <img src="view/home/images1/item/1380754_batman_comic_hero_superhero_icon.png" alt="" class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                        Manga - Comic</h2>
                    </div>

                    <nav class="product__sidebar-list">

                        <div class="row">
                            <div class="product__sidebar-item col-lg-6">
                                <img src="view/home/images1/product/【グラブル】「炭治郎&禰豆子&善逸&伊之助」の評価_性能検証｜鬼滅コラボ【グランブルーファンタジー】 - ゲームウィズ(GameWith).jfif" alt="" class="product__sidebar-item-img">
                                <a href="" class="product__sidebar-item-name">Manga</a>
                            </div>
                            <div class="product__sidebar-item col-lg-6">
                                <img src="view/home/images1/product/My Anime For Life.jfif" class="product__sidebar-item-img">
                                <a href="" class="product__sidebar-item-name">Series Manga</a>
                            </div>
                            <div class="product__sidebar-item col-lg-6">
                                <img src="view/home/images1/product/twd2_biaao_demo.jpg" alt="" class="product__sidebar-item-img">
                                <a href="" class="product__sidebar-item-name">Comics</a>
                            </div>
                            <div class="product__sidebar-item col-lg-6">
                                <img src="view/home/images1/product/8936054081882.jpg" alt="" class="product__sidebar-item-img">
                                <a href="" class="product__sidebar-item-name">Truyện tranh Việt Nam</a>
                            </div>
                        </div>
                    </nav>

                    <div class="product__sidebar-img-wrap">
                        <!-- <img src="images1/product/Demon Slayer_ Kimetsu no Yaiba - Assista na Crunchyroll.png" width="255" height="350" alt=""> -->
                        <video width="255" height="300" controls>
                        <source src="view/home/video/contra.st_1629123780_musicaldown.com.mp4" type="video/mp4">
                        </video>
                        <!-- <img src="images/banner_7.jpg" alt="" class="product__sidebar-img"> -->
                    </div>
                </aside>

                <article class="product__content col-lg-9 col-md-12 col-sm-12">
                    <nav class="row" >
                        <ul class="product__list hide-on-mobile" >
                            <li class="product__item product__item--active">
                                <a href="#" class="product__link">san pham</a>
                            </li>
                        </ul>

                        <div class="product__title-mobile">
                            <h2>Hành động - Phiêu lưu</h2>
                        </div>
                    </nav>

                    <div class="row product__panel">
                        <?php foreach ($array['book'] as $boo) { ?>
                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">

                                <div class="product__panel-img-wrap">
                                    <img  style=" " src="view/home/images1/product/<?=$boo['image']?>" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">

                                    <a href="index.php?controller=home&action=detail&id=<?=$boo['id'] ?>" class="product__panel-link"><?=$boo['name']?></a>
                                </h3>


                                <div class="product__panel-price">
                                    <span class="product__panel-price-current" >
                                        <?= $formattedNum = number_format($boo['price'], 0, ',', '.');?>đ
                                    </span>
                                    <div class="product__panel-rate-wrap">
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </article>
            </div>
        </div>
    </section>
        </form>
    <!--end product -->

    <!-- product love -->

    <!--end product love -->

    <!-- footer -->
    <footer>
        <section class="footer__top">
            <div class="container">
                <div class="row">
                    <article class="footer__top-intro col-lg-5 col-md-4 col-sm-6">
                        <h4 class="footer__top-intro-heading">
                            Về chúng tôi
                        </h4>
                        <div class="footer__top-intro-content">
                            Edubook là cửa hàng luôn cung cấp cho các bạn tìm tòi tri thức, đam mê 
                            đọc sách trên khắp cả nước.Chúng tôi sẽ liên tục cập 
                            nhật những cuốn sách hay nhất, mới nhất, chất lượng nhất 
                            giúp người đọc có những cuốn sách hay nhất để đọc! <br> <br>
                            Điện thoại: 0352 860 701 <br>
                            Email: teamed2@gmail.com <br>
                            Zalo:  039.882.3232 <br>
                        </div>
                    </article>

                    <article class="footer__top-policy col-lg-3 col-md-4 col-sm-6">
                        <h4 class="footer__top-policy-heading">
                            Chính sách mua hàng
                        </h4>

                        <ul class="footer__top-policy-list">
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hình thức đặt hàng</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hình thức thanh toán</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Phương thức vận chuyển</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Chính sách đổi trả</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hướng dẫn sử dụng</a>
                            </li>
                        </ul>
                    </article>

                    <article class="footer__top-contact-wrap col-lg-4 col-md-4 col-sm-6">
                        <h4 class="footer__top-contact-heading">
                            Hotline liên hệ
                        </h4>

                        <div class="footer__top-contact">
                            <div class="footer__top-contact-icon">
                                <img src="view/home/images/phone_top.png" class="footer__top-contact-img">
                            </div>

                            <div class="footer__top-contact-phone-wrap">
                                <div class="footer__top-contact-phone">
                                    039.882.3232
                                </div>
                                <div class="footer__top-contact-des">
                                    (Giải đáp thắc mắc 24/24)
                                </div>
                            </div>
                        </div>
                    
                        <h4 class="footer__top-contact-heading">
                            Kết nối với chúng tôi
                        </h4>

                        <div class="footer__top-contact-social">
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="view/home/images/facebook.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="view/home/images/youtube.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="view/home/images/tiktok.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="view/home/images/zalo.png">
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="footer__bottom">
            <div class="container">
                <div class="row">
                    <span class="footer__bottom-content">@Bản quyền thuộc về edubook | Thiết kế bởi team Hoàng Văn Thụ và Nguyễn Phúc Nhật Thành </span>
                </div>
            </div>
        </section>
    </footer>
    <!-- end footer -->

    </div>
    </div>
    <script src="view/home/js/jq.js"></script>
    <script src="view/home/js/index.js"></script>
</body>
</html>