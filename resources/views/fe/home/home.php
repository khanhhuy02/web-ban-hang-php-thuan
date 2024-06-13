<!-- Header Area start  -->

<!-- Header Area End  -->


<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Giỏ Hàng</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a class='image' href='single-product.html'><img src="<?= assetss ?>assetsUser/images/product-image/1.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a class='title' href='single-product.html'>Walnut Cutting Board</a>
                        <span class="quantity-price">Số lượng<span class="amount"> 10</span></span>
                        <span class="quantity-price">Giá <span class="amount"> 100.000.000</span> VND</span>
                        <a href="#" class="remove"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </li>
                <li>
                    <a class='image' href='single-product.html'><img src="<?= assetss ?>assetsUser/images/product-image/2.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a class='title' href='single-product.html'>Lucky Wooden Elephant</a>
                        <span class="quantity-price">Số lượng<span class="amount"> 10</span></span>
                        <span class="quantity-price">Giá <span class="amount"> 100.000.000</span> VND</span>
                        <a href="#" class="remove"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </li>
                <li>
                    <a class='image' href='single-product.html'><img src="<?= assetss ?>assetsUser/images/product-image/3.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a class='title' href='single-product.html'>Fish Cut Out Set</a>
                        <span class="quantity-price">Số lượng<span class="amount"> 10</span></span>
                        <span class="quantity-price">Giá <span class="amount"> 100.000.000</span> VND</span>
                        <a href="#" class="remove"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="sub-total">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-start">Số Lượng :</td>
                            <td class="text-end">30</td>
                        </tr>
                        <tr>
                            <td class="text-start">Tổng Giá :</td>
                            <td class="text-end theme-color"><span class="amount">400.000.000 VND</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="buttons">
                <a class='btn btn-dark btn-hover-primary mb-30px' href='cart.html'>Giỏ Hàng</a>
                <a class='btn btn-outline-dark current-btn' href='checkout.html'>Thanh Toán</a>
            </div>
            <p class="minicart-message">Giao hàng miễn phí trên toàn quốc</p>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->


<!-- OffCanvas Menu Start mobile-->

<!-- OffCanvas Menu End mobile-->


<div class="offcanvas-overlay"></div>

<!-- Hero/Intro Slider Start -->


<!-- Hero/Intro Slider End -->

<!-- Product Category Start -->


<!-- Product Category End -->

<!-- Product tab Area Start -->
<div class="section product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" data-aos="fade-up">
                <div class="section-title mb-0">
                    <h2 class="title">Sản Phẩm</h2>
                    <!--  <p class="sub-title mb-30px">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do
                            eiusmo tempor incididunt ut labore</p>-->
                </div>
            </div>

            <!-- Tab Start -->
            <div class="col-md-12 text-center mb-40px" data-aos="fade-up" data-aos-delay="200">
                <ul class="product-tab-nav nav justify-content-center">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-product-new-arrivals">Sản phẩm mới</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-best-sellers">Sản phẩn giảm giá</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-sale-item">sản
                            phẩm bán chạy</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-on-sales">Sản
                            phẩm xem nhiều</a></li>
                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <div class="row">
            <div class="col">
                <div class="tab-content">
                    <!-- 1st tab start -->
                    <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                        <div class="row">
                            <?php
                          
                            foreach ($product as $key => $value) : $produc_page = $key ?>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product product_data">
                                        <div class="thumb">
                                            <a class='text-center justify-content-center' href='shop-left-sidebar.html'>
                                                <img src="<?= ROOT_URL . $value['image'] ?>" alt="Product" class="w-75 image" />
                                                <input type="hidden" class="product-id" value="<?= $value['id'] ?>">
                                            </a>
                                            <span class="badges">
                                                <span class="new">Mới</span>
                                            </span>
                                            <div class="actions">
                                                <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                                <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>

                                                <button class='action compare add-to-cart' href='' title='Add To Cart'><i class="fa-solid fa-cart-shopping"></i></button>
                                            </div>
                                            <!-- <button title="Add To Cart" class=" add-to-cart"></button> -->

                                        </div>

                                        <div class="content">
                                            <h5 class="title names"><a href='<?= $value['alias_sp_categores'] ?>/<?= $value['alias_sp'] ?>'><?= $value['name'] ?> </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new price-new"><?= number_format($value['price_new'], 0, ',', '.') ?> </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach ?>
                            <nav aria-label="Page navigation example " class="d-flex">
                                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <span class="page-link">
                                                <?= $i?>
                                            </span>
                                        </li>
                                    </ul>

                                <?php endfor ?>
                            </nav>
                        </div>
                    </div>
                    <!-- 1st tab end -->

                    <!-- 2nd tab start -->
                    <div class="tab-pane fade" id="tab-product-best-sellers">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/1.jpg" alt="Product" />
                                            <!-- <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/2.jpg"
                                                    alt="Product" /> -->
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-10%</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>

                                            <button class='action compare' href='' title='Add To Cart' class=" add-to-cart"><i class="fa-solid fa-cart-shopping"></i></button>
                                        </div>
                                        <!-- <button title="Add To Cart" class=" add-to-cart"></button> -->

                                    </div>

                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Simple minimal Chair </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/4.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-10%</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                            <button class='action compare' href='' title='Add To Cart' class=" add-to-cart"><i class="fa-solid fa-cart-shopping"></i></button>
                                        </div>
                                        <!-- <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button> -->
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/6.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-7%</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>High quality vase
                                                bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/8.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom
                                                Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/9.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/10.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-5%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom
                                                Table</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/11.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/12.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/13.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/14.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>High quality vase
                                                bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/15.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/16.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom
                                                Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->
                    <div class="tab-pane fade" id="tab-product-sale-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/2.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Simple minimal Chair </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/4.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/6.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-7%</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>High quality vase
                                                bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/8.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom
                                                Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/9.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/10.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-5%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom
                                                Table</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/11.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/12.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/13.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/14.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>High quality vase
                                                bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/15.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/16.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom
                                                Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 3rd tab end -->
                    <!-- 4th tab start -->
                    <div class="tab-pane fade" id="tab-product-on-sales">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/2.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Simple minimal Chair </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/4.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/6.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-7%</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>High quality vase
                                                bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/8.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom
                                                Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/9.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/10.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="sale">-5%</span>
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom
                                                Table</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/11.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/12.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Wooden decorations</a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/13.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/14.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>High quality vase
                                                bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a class='image' href='shop-left-sidebar.html'>
                                            <img src="<?= assetss ?>assetsUser/images/product-image/15.jpg" alt="Product" />
                                            <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/16.jpg" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a class='action wishlist' href='wishlist.html' title='Wishlist'><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a class='action compare' href='compare.html' title='Compare'><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom
                                                Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 4th tab end -->
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Product tab Area End -->

<!-- Banner Section Start -->
<div class="section pb-100px pt-100px">
    <div class="container">
        <!-- Banners Start -->
        <div class="row">
            <!-- Banner Start -->
            <div class="col-lg-6 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                <a class='banner' href='shop-left-sidebar.html'>
                    <img src="<?= assetss ?>assetsUser/images/banner/1.jpg" alt="" />
                    <div class="info justify-content-end">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Sale Furniture <br /> For Summer
                            </h3>
                            <p>Great Discounts Here</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <div class="col-lg-6 col-12" data-aos="fade-up" data-aos-delay="400">
                <a class='banner' href='shop-left-sidebar.html'>
                    <img src="<?= assetss ?>assetsUser/images/banner/2.jpg" alt="" />
                    <div class="info justify-content-start">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Office Chair <br /> For Best Offer</h3>
                            <p>Great Discounts Here</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Banner End -->
        </div>
        <!-- Banners End -->
    </div>
</div>
<!-- Banner Section End -->
<!--  Blog area Start -->
<div class="main-blog-area pb-100px">
    <div class="container">
        <!-- section title start -->
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center mb-11">
                    <h2 class="title">Latest News</h2>
                    <p class="sub-title">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo
                        tempor incididunt ut labore
                    </p>
                </div>
            </div>
        </div>
        <!-- section title start -->
        <div class="blog-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
            <!-- Start single blog -->
            <div class="swiper-wrapper">
                <div class="single-blog swiper-slide">
                    <div class="blog-image">
                        <a href='blog-single-left-sidebar.html'><img src="<?= assetss ?>assetsUser/images/blog-image/1.jpg" class="img-responsive w-100" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date">
                            <a class="blog-date" href="#">14 November</a>
                        </div>
                        <h5 class="blog-heading"><a class='blog-heading-link' href='blog-single-left-sidebar.html'>Interior design is the art.</a></h5>
                        <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do
                            eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                        <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="single-blog swiper-slide">
                    <div class="blog-image">
                        <a href='blog-single-left-sidebar.html'><img src="<?= assetss ?>assetsUser/images/blog-image/2.jpg" class="img-responsive w-100" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date">
                            <a class="blog-date" href="#">14 November</a>
                        </div>
                        <h5 class="blog-heading"><a class='blog-heading-link' href='blog-single-left-sidebar.html'>Decorate your home with furns.</a></h5>
                        <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do
                            eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                        <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="single-blog swiper-slide">
                    <div class="blog-image">
                        <a href='blog-single-left-sidebar.html'><img src="<?= assetss ?>assetsUser/images/blog-image/3.jpg" class="img-responsive w-100" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date">
                            <a class="blog-date" href="#">14 November</a>
                        </div>
                        <h5 class="blog-heading"><a class='blog-heading-link' href='blog-single-left-sidebar.html'>Spatialize with that the furns.</a></h5>
                        <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do
                            eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                        <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="single-blog swiper-slide">
                    <div class="blog-image">
                        <a href='blog-single-left-sidebar.html'><img src="<?= assetss ?>assetsUser/images/blog-image/4.jpg" class="img-responsive w-100" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date">
                            <a class="blog-date" href="#">14 November</a>
                        </div>
                        <h5 class="blog-heading"><a class='blog-heading-link' href='blog-single-left-sidebar.html'>Unique products will impress.</a></h5>
                        <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do
                            eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                        <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                    </div>
                </div>
                <!-- End single blog -->
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!--  Blog area End -->

<!-- Instagram Area Start -->
<div class="section pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center mb-11">
                    <h2 class="title">Follow Us Instagram</h2>
                    <p class="sub-title">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo
                        tempor incididunt ut labore</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Item -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                <div class="insta-wrapper">
                    <a href="https://www.instagram.com/" target="_blank"><img class="w-100" src="<?= assetss ?>assetsUser/images/instragram-image/1.png" alt="">

                    </a>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                <div class="insta-wrapper">
                    <a href="https://www.instagram.com/" target="_blank"><img class="w-100" src="<?= assetss ?>assetsUser/images/instragram-image/2.png" alt="">

                    </a>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-xs-30px" data-aos="fade-up" data-aos-delay="600">
                <div class="insta-wrapper">
                    <a href="https://www.instagram.com/" target="_blank"><img class="w-100" src="<?= assetss ?>assetsUser/images/instragram-image/3.png" alt="">

                    </a>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-lg-3 col-md-6 col-sm-6 " data-aos="fade-up" data-aos-delay="800">
                <div class="insta-wrapper">
                    <a href="https://www.instagram.com/" target="_blank"><img class="w-100" src="<?= assetss ?>assetsUser/images/instragram-image/4.png" alt="">

                    </a>
                </div>
            </div>
            <!-- Single Item -->
        </div>
    </div>
</div>
<!-- Instagram Area End -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script>
    $(document).ready(function() {
        $('.add-to-cart').click(function() {
            var price_new = $(this).closest('.product').find('.price-new').text();
            var names = $(this).closest('.product').find('.names').text();
            var image = $(this).closest('.product').find('.image').attr('src');
            var product_id = $(this).closest('.product').find('.product-id').val();
           
            let url = "them-gio-hang";
            $.ajax({
                method: "POST",
                url: url,
                dataType: "json",
                data: {
                    product_id: product_id,
                    price_new: price_new,
                    image: image,
                    names: names,
                },
                success: function(response) {
                    console.log(response);
                }
            });
        });
        $('.add-to-cart').click(function() {
            var product_id = $(this).closest('.product').find('.product-id').val();


        })

    });
</script> -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- <script>
    $('.page-item').click(function() {
        var page = $(this).closest('.pagination').find('.page-link').text();
        // alert(page)
        url = page;
        $.ajax({
            method: "POST",
            url: url,
            dataType: "json",
            data: {
                page: page,
            },
            success: function(response) {
           alert(page);
                location.reload()

            }
        });
    });
</script> -->

<!-- 
<script>
    async function name() {
        let d1 = await fetch("http://localhost/mvc/trang-chu/");
        let d2 = await d1.json();
        console.log(d2);
    }
    name()
</script> -->