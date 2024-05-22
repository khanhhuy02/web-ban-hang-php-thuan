<div class="header section">
    <!-- Header Top Message Start -->
    <div class="header-top section-fluid bg-black">
        <div class="container">
            <div class="row row-cols-lg-2 align-items-center">

                <!-- Header Top Message Start -->
                <!-- <div class="col text-center text-lg-start">
                        <div class="header-top-massege">
                            <p>Default Welcome Message </p>
                        </div>
                    </div> -->
                <!-- Header Top Message End -->

                <!-- Header Top Language Currency -->
                <div class="col d-none d-lg-block">
                    <div class="header-top-set-lan-curr d-flex justify-content-end">

                        <!-- Single Wedge Start -->
                        <!-- <div class="header-top-curr dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"> Language : (ENG) <i
                                        class="ion-ios-arrow-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Italiano</a></li>
                                    <li><a class="dropdown-item" href="#">Français</a></li>
                                    <li><a class="dropdown-item" href="#">Filipino</a></li>
                                </ul>
                            </div> -->
                        <!-- Single Wedge End -->

                        <!-- Single Wedge Start -->
                        <!-- <div class="header-top-curr dropdown">
                                <button class="dropdown-toggle pr-0 border-0" data-bs-toggle="dropdown">Currency : (USD)
                                    <i class="ion-ios-arrow-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">USD $</a></li>
                                    <li><a class="dropdown-item" href="#">EUR €</a></li>
                                    <li><a class="dropdown-item" href="#">POUND £</a></li>
                                    <li><a class="dropdown-item" href="#">FRANC ₣</a></li>
                                </ul>
                            </div> -->
                        <!-- Single Wedge End -->

                    </div>
                </div>
                <!-- Header Top Language Currency -->
            </div>
        </div>
    </div>
    <!-- Header Top  End -->

    <!-- Header Bottom  Start -->
    <div class="header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row align-self-center">
                <!-- Header Logo Start -->
                <div class="col-auto align-self-center">
                    <div class="header-logo">
                        <a href='index.html'><img src="<?= assetss ?>assetsUser/images/logo/logo.png" alt="Site Logo" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Action PC Start -->
                <div class="col align-self-center">
                    <div class="header-actions">
                        <div class="header_account_list">
                            <a href="javascript:void(0)" class="header-action-btn search-btn"><i class="icon-magnifier"></i></a>
                            <div class="dropdown_search">
                                <form class="action-form" action="#">
                                    <input class="form-control" placeholder="Enter your search key" type="text">
                                    <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Single Wedge Start -->
                        <div class="header-bottom-set dropdown">
                            <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i class="icon-user"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <?php if (isset($_SESSION['name'])) { ?>
                                    <li><a class='dropdown-item' href='my-account.html'><?php echo $_SESSION['name']; ?></a></li>
                                    <li><a class='dropdown-item' href='<?= ROOT_URL ?><?=administrators?>/logout'>Thoát</a></li>
                                <?php } else { ?>
                                    <li><a class='dropdown-item' href='<?= ROOT_URL ?>dang-nhap'>Đăng nhập</a></li>
                                <?php } ?>
                            </ul>
                        </div>

                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                            <i class="icon-handbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="icon-menu"></i>
                        </a>
                    </div>
                </div>
                <!-- Header Action PC End -->

            </div>
        </div>
    </div>
    <!-- Header Bottom  End -->

    <!-- Header Bottom  Start -->
    <div class="header-bottom d-lg-none sticky-nav bg-white">
        <div class="container position-relative">
            <div class="row align-self-center">
                <!-- Header Logo Start -->
                <div class="col-auto align-self-center">
                    <div class="header-logo">
                        <a href='index.html'><img src="<?= assetss ?>assetsUser/images/logo/logo.png" alt="Site Logo" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Action Mobile Start -->
                <div class="col align-self-center">
                    <div class="header-actions">
                        <div class="header_account_list">
                            <a href="javascript:void(0)" class="header-action-btn search-btn"><i class="icon-magnifier"></i></a>
                            <div class="dropdown_search">
                                <form class="action-form" action="#">
                                    <input class="form-control" placeholder="Enter your search key" type="text">
                                    <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Single Wedge Start -->
                        <div class="header-bottom-set dropdown">
                            <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i class="icon-user"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class='dropdown-item' href='my-account.html'>Tài Khoản</a></li>
                                <li><a class='dropdown-item' href='login.html'>Thoát</a></li>
                            </ul>
                        </div>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                            <i class="icon-handbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="icon-menu"></i>
                        </a>
                    </div>
                </div>
                <!-- Header Action Mobile End -->

            </div>
        </div>
    </div>
    <!-- Header Bottom  End -->

    <!-- Main Menu Start -->
    <div class="bg-black d-none d-lg-block sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="main-menu">
                        <ul>
                            <li>
                                <a href="#">Trang chủ</a>
                            </li>
                            <li><a href="shop-left-sidebar.html">Sản Phẩm</a></li>


                            <!-- <li class="dropdown"><a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href='404.html'>404 Page</a></li>
                                        <li><a href='privacy-policy.html'>Privacy Policy</a></li>
                                        <li><a href='faq.html'>Faq Page</a></li>
                                        <li><a href='coming-soon.html'>Coming Soon Page</a></li>
                                    </ul>
                                </li> -->
                            <li><a href="blog-grid-left-sidebar.html">Tin Tức</a>

                            </li>
                            <li><a href='about.html'>Giới thiệu</a></li>
                            <li><a href='contact.html'>Liên hệ</a></li>

                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Menu End -->
</div>