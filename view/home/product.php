    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <script src="view/home/js/jquery-3.3.1.js"></script>
    <script src="view/home/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="view/home/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/home/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="view/home/css/style.css">
    <link rel="stylesheet" href="view/home/css/product.css">
</head>
<body>
    <!-- header -->
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
                                <a href="#" class="header__top-link">

                                Hỏi đáp</a>
                            </li>
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">Hướng dẫn</a>
                            </li>
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">Đăng ký</a>
                            </li>
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">Đăng nhập</a>
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
                            <a href="index.php?controller=home" class="header__logo-link">
                                <img src="view/home/images1/logo1.png" alt="Logo" class="header__logo-img">
                            </a>
                        </h1>
                    </div>

                    <div class="col-lg-6 col-md-7 col-sm-0 header__search">
                        <select name="" id="" class="header__search-select">
                            <option value="0">All</option>
                            <option value="1">Sách tiếng việt</option>
                            <option value="2">Sách sách nước ngoài</option>
                            <option value="3">Manga-Comic</option>
                            
                        </select>
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm tại đây...">
                        <button class="header__search-btn">
                            <div class="header__search-icon-wrap">
                                <i class="fas fa-search header__search-icon"></i>
                            </div>
                        </button>
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

                    <a href="cart.php" class="col-lg-1 col-md-1 col-sm-0 header__cart">
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
                                <a href="index.php?controller=home" class="header__nav-link">Trang chủ</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="contact.php" class="header__nav-link">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <!--end header nav -->
    <!-- score-top-->

<button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    <!-- product -->

    <section class="product">
        <div class="container">
            <div class="row bg-white pt-4 pb-4 border-bt pc">
                <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                    <ul class="menu__list">
                        <?php foreach ($array['categories'] as $cat) { ?>
                        <li class="menu__item menu__item--active">
                            <a href="index.php?controller=home&action=category&id=<?=$cat['id'] ?>" class="menu__link">
                            <img src="images1/item/baby-boy.png" alt=""  class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                                <?=$cat['name'] ?></a>
                        </li>
                       <?php }?>
                      
                    </ul>

                </nav>

                <article class="product__main col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <?php foreach ($book as $boo) { ?>
                        <div class="product__main-img col-lg-4 col-md-4 col-sm-12">
                            <div class="product__main-img-primary">
                                <img src="view/home/images1/product/<?=$boo['image']?>">
                            </div>


                        </div>
                        <?php } ?>
                        <?php foreach ($book as $boo) { ?>
                            <div class="product__main-info col-lg-8 col-md-8 col-sm-12">
                                <div class="product__main-info-breadcrumb">
                                    Trang chủ / Sản phẩm
                                </div>
                                <a class="product__main-info-title">
                                    <h2 class="product__main-info-heading">
                                        <?=$boo['name']?>
                                    </h2>
                                </a>
                                <div class="product__main-info-rate-wrap">
                                    <i class="fas fa-star product__main-info-rate"></i>
                                    <i class="fas fa-star product__main-info-rate"></i>
                                    <i class="fas fa-star product__main-info-rate"></i>
                                    <i class="fas fa-star product__main-info-rate"></i>
                                    <i class="fas fa-star product__main-info-rate"></i>
                                </div>

                                <div class="product__main-info-price">
                                    <span class="product__main-info-price-current">
                                       <?=$formattedNum = number_format($boo['price'], 0, ',', '.');?>đ
                                    </span>
                                </div>

                                <div class="product__main-info-description">
                                    <?=$boo['content']?>
                                </div>

                                <div class="product__main-info-cart">
                                    <!--<div class="product__main-info-cart-quantity">
                                        <input type="button" value="-"  class="product__main-info-cart-quantity-minus">
                                        <input type="number" step="1" min="1" max="999" value="1" class="product__main-info-cart-quantity-total">
                                        <input type="button" value="+" class="product__main-info-cart-quantity-plus">
                                    </div>-->

                                    <div class="product__main-info-cart-btn-wrap">
                                        <a href="index.php?controller=home&action=add_to_cart&id=<?= $boo['id'] ?>">
                                        <button class="product__main-info-cart-btn">
                                            Thêm vào giỏ hàng
                                        </button>
                                        </a>
                                    </div>
                                </div>

                                <div class="product__main-info-contact">
                                    <div class="product__main-info-contact-phone-wrap">
                                        <div class="product__main-info-contact-phone-icon">
                                            <i class="fas fa-phone-alt "></i>
                                        </div>

                                        <div class="product__main-info-contact-phone">
                                            <div class="product__main-info-contact-phone-title">
                                                Gọi điện tư vấn
                                            </div>
                                            <div class="product__main-info-contact-phone-number">
                                                ( 0352.860.701)
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <?php }?>
                    </div>
                    <div class="row bg-white">
                        <div class="col-12 product__main-tab">
                            <a href="#" class="product__main-tab-link product__main-tab-link--active">
                                Mô tả
                            </a>
                        </div>



                            <h2 class="thongtin">    <span>Thông tin chi tiết</span>
                             </h2>
                        <?php foreach ($book as $boo) { ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr><th>Tác giả</th><td> <?=$boo['author']?></td></tr>
                                            <tr><th>Kích thước</th><td> <?=$boo['size']?></td></tr>
                                            <tr><th>Loại bìa</th><td><?=$boo['bookcover']?></td></tr>
                                            <tr><th>Số trang</th><td><?=$boo['numberpages']?></td></tr>

                                        </tbody>
                                    </table>
                                </div>
                        <?php } ?>

                        </div>

                    </div>
                </article>



            </div>


        </div>
    </section>

    <!--product -->

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
                    <span class="footer__bottom-content">@Bản quyền thuộc về edubook | Thiết kế bởi team ED2 </span>
                </div>
            </div>
        </section>
    </footer>
    <!-- end footer -->

    <script src="view/home/js/jq.js"></script>
    <script src="view/home/js/product.js"></script>
        
</body>
</html>