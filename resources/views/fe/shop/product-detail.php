 <!-- Product Details Area Start -->
 <div class="product-details-area pt-100px pb-100px">
     <div class="container">
         <div class="row">
             <div class="col-lg-5 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                 <!-- Swiper -->
                 <div class="swiper-container zoom-top">
                     <div class="swiper-wrapper">
                         <?php $subimage = $detail[0]['sub_image'];
                            foreach (explode(',', $subimage) as $itemImage) {    ?>
                             <div class="swiper-slide zoom-image-hover">
                                 <img class="img-responsive m-auto" src="<?= ROOT_URL . $itemImage ?>" alt="<?= $detail[0]['name'] ?>">
                             </div>
                         <?php
                            }
                            ?>
                     </div>
                 </div>
                 <div class="swiper-container zoom-thumbs slider-nav-style-1 small-nav mt-15px mb-15px">

                     <div class="swiper-wrapper">
                         <?php $subimage = $detail[0]['sub_image'];
                            foreach (explode(',', $subimage) as $itemImage) {    ?>

                             <div class="swiper-slide">
                                 <img class="img-responsive m-auto" src="<?= ROOT_URL . $itemImage ?>" alt="<?= $detail[0]['name'] ?>">
                             </div>
                         <?php
                            }
                            ?>
                     </div>
                     <!-- Add Arrows -->
                     <div class="swiper-buttons">
                         <div class="swiper-button-next"></div>
                         <div class="swiper-button-prev"></div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-7 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                 <div class="product-details-content quickview-content">
                     <h2><?= $detail[0]['name'] ?></h2>
                     <p class="reference">Loại:<span> <b style="color: blue;"><?= $detail[0]['name_category'] ?></b></span></p>
                     <div class="pro-details-rating-wrap">
                         <div class="rating-product">
                             <i class="ion-android-star"></i>
                             <i class="ion-android-star"></i>
                             <i class="ion-android-star"></i>
                             <i class="ion-android-star"></i>
                             <i class="ion-android-star"></i>
                         </div>
                         <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                     </div>
                     <div class="pricing-meta">
                         <ul>
                             <li class="old-price not-cut"><?= number_format($detail[0]['price_new'], 0, ',', '.') ?></li>
                         </ul>
                     </div>
                     <!-- <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p> -->
                     <div class="pro-details-size-color d-flex">
                         <div class="pro-details-color-wrap">
                             <span>Color</span>
                             <div class="pro-details-color-content">
                                 <ul>
                                     <li class="blue"></li>
                                     <li class="maroon active"></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="product-size">
                             <span>Size</span>
                             <select>
                                 <option value="1">S</option>
                                 <option value="2">M</option>
                                 <option value="3">L</option>
                                 <option value="4">XL</option>
                             </select>
                         </div>
                     </div>
                     <div class="pro-details-quality">
                         <div class="cart-plus-minus">
                             <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                         </div>
                         <div class="pro-details-cart">
                             <button class="add-cart btn btn-primary btn-hover-primary ml-4" href="#"> Add To
                                 Cart</button>
                         </div>
                     </div>
                     <div class="pro-details-wish-com">
                         <div class="pro-details-wishlist">
                             <a href='wishlist.html'><i class="ion-android-favorite-outline"></i>Add to
                                 wishlist</a>
                         </div>
                         <div class="pro-details-compare">
                             <a href='compare.html'><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                         </div>
                     </div>
                     <div class="pro-details-social-info">
                         <span>Share</span>
                         <div class="social-info">
                             <ul class="d-flex">
                                 <li>
                                     <a href="#"><i class="ion-social-facebook"></i></a>
                                 </li>
                                 <li>
                                     <a href="#"><i class="ion-social-twitter"></i></a>
                                 </li>
                                 <li>
                                     <a href="#"><i class="ion-social-google"></i></a>
                                 </li>
                                 <li>
                                     <a href="#"><i class="ion-social-instagram"></i></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="pro-details-policy">
                         <ul>
                             <li><img src="<?= assetss ?>assetsUser/images/icons/policy.png" alt="" /><span>Chính sách bảo mật</span></li>
                             <li><img src="<?= assetss ?>assetsUser/images/icons/policy-2.png" alt="" /><span>Chính sách giao hàng</span></li>
                             <li><img src="<?= assetss ?>assetsUser/images/icons/policy-3.png" alt="" /><span>Chính sách hoàn trả</span></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <!-- product details description area start -->
 <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
     <div class="container">
         <div class="description-review-wrapper">
             <div class="description-review-topbar nav">
                 <a data-bs-toggle="tab" href="#des-details1">Thông Tin Sản Phẩm</a>
                 <a class="active" data-bs-toggle="tab" href="#des-details2">Thông Tin chi Tiết</a>
                 <a data-bs-toggle="tab" href="#des-details3">Bình Luận</a>
             </div>
             <div class="tab-content description-review-bottom">
                 <div id="des-details2" class="tab-pane active">
                     <div class="product-anotherinfo-wrapper">
                         <ul class="row">
                             <li class="w-100"><span class="col-lg-2">Màn hình:</span><span class="col-lg-9"><?= $detail[0]['screen'] ?></span></li>
                             <li class="w-100"><span class="col-lg-2">Hệ điều hành:</span><span class="col-lg-9"><?= $detail[0]['operating_system'] ?></span></li>
                             <li class="w-100"><span class="col-lg-2">Camera sau:</span><span class="col-lg-9"><?= $detail[0]['camera_before'] ?></span></li>
                             <li class="w-100"><span class="col-lg-2">Camera trước:</span><span class="col-lg-9"><?= $detail[0]['camera_after'] ?></span></li>
                             <li class="w-100"><span class="col-lg-2">Chip:</span><span class="col-lg-9"><?= $detail[0]['chip'] ?></span></li>
                             <li class="w-100"><span class="col-lg-2">RAM:</span><span class="col-lg-9"><?= $detail[0]['ram'] ?></span></li>
                             <li class="w-100"><span class="col-lg-2">Dung lượng lưu trữ:</span><span class="col-lg-9"><?= $detail[0]['capacity'] ?></span></li>
                             <li class="w-100"><span class="col-lg-2">SIM:</span><span class="col-lg-9"><?= $detail[0]['pin'] ?></span></li>
                             <li class="w-100"><span class="col-lg-2">Pin, Sạc:</span><span class="col-lg-9"><?= $detail[0]['sim'] ?></span></li>
                             <li class="w-100"><span class="col-lg-2">Ngày phát hành:</span><span class="col-lg-9"><?= $detail[0]['meeting_day'] ?></span></li>
                         </ul>
                     </div>
                 </div>
                 <div id="des-details1" class="tab-pane">
                     <div class="product-description-wrapper">
                         <?= $detail[0]['description'] ?>
                     </div>
                 </div>
                 <div id="des-details3" class="tab-pane">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="review-wrapper">
                                 <?php foreach ($commnen as $key => $value) { ?>
                                     <div class="single-review">
                                         <div class="review-img">
                                             <img src="<?= assetss ?>assetsUser/images/review-image/1.png" alt="" />
                                         </div>
                                         <div class="review-content">
                                             <div class="review-top-wrap">
                                                 <div class="review-left">
                                                     <div class="review-name">
                                                         <h4><?=$value['name']?></h4>
                                                     </div>
                                                     <div class="rating-product">
                                                         <i class="ion-android-star"></i>
                                                         <i class="ion-android-star"></i>
                                                         <i class="ion-android-star"></i>
                                                         <i class="ion-android-star"></i>
                                                         <i class="ion-android-star"></i>
                                                     </div>
                                                 </div>
                                                 <!-- <div class="review-left">
                                                     <a href="#">Reply</a>
                                                 </div> -->
                                             </div>
                                             <div class="review-bottom">
                                                 <p>
                                                 <?=$value['content']?>
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- <div class="single-review child-review">
                                     <div class="review-img">
                                         <img src="<?= assetss ?>assetsUser/images/review-image/2.png" alt="" />
                                     </div>
                                     <div class="review-content">
                                         <div class="review-top-wrap">
                                             <div class="review-left">
                                                 <div class="review-name">
                                                     <h4>White Lewis</h4>
                                                 </div>
                                                 <div class="rating-product">
                                                     <i class="ion-android-star"></i>
                                                     <i class="ion-android-star"></i>
                                                     <i class="ion-android-star"></i>
                                                     <i class="ion-android-star"></i>
                                                     <i class="ion-android-star"></i>
                                                 </div>
                                             </div>
                                             <div class="review-left">
                                                 <a href="#">Reply</a>
                                             </div>
                                         </div>
                                         <div class="review-bottom">
                                             <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                         </div>
                                     </div>
                                 </div> -->
                             </div>
                         <?php
                                    } ?>
                         </div>
                         <!-- gửi bình luận -->
                         <div class="col-lg-12">
                             <div class="ratting-form-wrapper pl-50">
                                 <h3>Đánh Giá</h3>
                                 <div class="ratting-form">
                                     <form action="<?= ROOT_URL ?>danh-gia" method="post">
                                         <div class="star-box">
                                             <span>Your rating:</span>
                                             <div class="rating-product">
                                                 <i class="ion-android-star"></i>
                                                 <i class="ion-android-star"></i>
                                                 <i class="ion-android-star"></i>
                                                 <i class="ion-android-star"></i>
                                                 <i class="ion-android-star"></i>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="rating-form-style">
                                                     <input placeholder="Name" type="text" value="<?= $_SESSION["name"] ?>" />
                                                     <input type="hidden" name="users_id" value="<?= $_SESSION["id"] ?>">
                                                     <input type="hidden" name="products_id" value="<?= $detail[0]["id"] ?>">
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="rating-form-style form-submit">
                                                     <textarea name="content"></textarea>
                                                     <button class="btn btn-primary btn-hover-color-primary " type="submit" value="Submit">Submit</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- product details description area end -->

 <!-- New Product Start -->
 <div class="section pb-100px" data-aos="fade-up" data-aos-delay="200">
     <div class="container">
         <!-- section title start -->
         <div class="row">
             <div class="col-md-12">
                 <div class="section-title text-start mb-11">
                     <h2 class="title">You Might Also Like</h2>
                 </div>
             </div>
         </div>
         <!-- section title start -->
         <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
             <div class="new-product-wrapper swiper-wrapper">
                 <!-- Single Prodect -->
                 <div class="new-product-item swiper-slide">
                     <div class="product">
                         <div class="thumb">
                             <a class='image' href='shop-left-sidebar.html'>
                                 <img src="<?= assetss ?>assetsUser/images/product-image/1.jpg" alt="Product" />
                                 <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/2.jpg" alt="Product" />
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
                             <h5 class="title"><a href='shop-left-sidebar.html'>Simple minimal Chair </a></h5>
                             <span class="price">
                                 <span class="new">$18.50</span>
                                 <span class="old">$28.50</span>
                             </span>
                         </div>
                     </div>
                 </div>
                 <!-- Single Prodect -->
                 <div class="new-product-item swiper-slide">
                     <div class="product">
                         <div class="thumb">
                             <a class='image' href='shop-left-sidebar.html'>
                                 <img src="<?= assetss ?>assetsUser/images/product-image/3.jpg" alt="Product" />
                                 <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/4.jpg" alt="Product" />
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
                             <h5 class="title"><a href='shop-left-sidebar.html'>Wooden decorations</a></h5>
                             <span class="price">
                                 <span class="new">$38.50</span>
                                 <span class="old">$43.50</span>
                             </span>
                         </div>
                     </div>
                 </div>
                 <!-- Single Prodect -->
                 <div class="new-product-item swiper-slide">
                     <div class="product">
                         <div class="thumb">
                             <a class='image' href='shop-left-sidebar.html'>
                                 <img src="<?= assetss ?>assetsUser/images/product-image/5.jpg" alt="Product" />
                                 <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/6.jpg" alt="Product" />
                             </a>
                             <span class="badges d-none">
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
                             <h5 class="title"><a href='shop-left-sidebar.html'>High quality vase bottle</a></h5>
                             <span class="price">
                                 <span class="new">$38.50</span>
                             </span>
                         </div>
                     </div>
                 </div>
                 <!-- Single Prodect -->
                 <div class="new-product-item swiper-slide">
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
                             <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom Chair</a></h5>
                             <span class="price">
                                 <span class="new">$38.50</span>
                             </span>
                         </div>
                     </div>
                 </div>
                 <!-- Single Prodect -->
                 <div class="new-product-item swiper-slide">
                     <div class="product">
                         <div class="thumb">
                             <a class='image' href='shop-left-sidebar.html'>
                                 <img src="<?= assetss ?>assetsUser/images/product-image/9.jpg" alt="Product" />
                                 <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/10.jpg" alt="Product" />
                             </a>
                             <span class="badges">
                                 <span class="sale">-5%</span>
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
                             <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom Table</a></h5>
                             <span class="price">
                                 <span class="new">$38.50</span>
                                 <span class="old">$40.50</span>
                             </span>
                         </div>
                     </div>
                 </div>
                 <!-- Single Prodect -->
             </div>
             <!-- Add Arrows -->
             <div class="swiper-buttons">
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
             </div>
         </div>
     </div>
 </div>

 <!-- New Product End -->

 <!-- New Product Start -->
 <div class="section pb-100px" data-aos="fade-up" data-aos-delay="200">
     <div class="container">
         <!-- section title start -->
         <div class="row">
             <div class="col-md-12">
                 <div class="section-title text-start mb-11">
                     <h2 class="title">12 Other Products In The Same Category:</h2>
                 </div>
             </div>
         </div>
         <!-- section title start -->
         <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
             <div class="new-product-wrapper swiper-wrapper">
                 <!-- Single Prodect -->
                 <div class="new-product-item swiper-slide">
                     <div class="product">
                         <div class="thumb">
                             <a class='image' href='shop-left-sidebar.html'>
                                 <img src="<?= assetss ?>assetsUser/images/product-image/1.jpg" alt="Product" />
                                 <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/2.jpg" alt="Product" />
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
                             <h5 class="title"><a href='shop-left-sidebar.html'>Simple minimal Chair </a></h5>
                             <span class="price">
                                 <span class="new">$18.50</span>
                                 <span class="old">$28.50</span>
                             </span>
                         </div>
                     </div>
                 </div>
                 <!-- Single Prodect -->
                 <div class="new-product-item swiper-slide">
                     <div class="product">
                         <div class="thumb">
                             <a class='image' href='shop-left-sidebar.html'>
                                 <img src="<?= assetss ?>assetsUser/images/product-image/3.jpg" alt="Product" />
                                 <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/4.jpg" alt="Product" />
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
                             <h5 class="title"><a href='shop-left-sidebar.html'>Wooden decorations</a></h5>
                             <span class="price">
                                 <span class="new">$38.50</span>
                                 <span class="old">$43.50</span>
                             </span>
                         </div>
                     </div>
                 </div>
                 <!-- Single Prodect -->
                 <div class="new-product-item swiper-slide">
                     <div class="product">
                         <div class="thumb">
                             <a class='image' href='shop-left-sidebar.html'>
                                 <img src="<?= assetss ?>assetsUser/images/product-image/5.jpg" alt="Product" />
                                 <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/6.jpg" alt="Product" />
                             </a>
                             <span class="badges d-none">
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
                             <h5 class="title"><a href='shop-left-sidebar.html'>High quality vase bottle</a></h5>
                             <span class="price">
                                 <span class="new">$38.50</span>
                             </span>
                         </div>
                     </div>
                 </div>
                 <!-- Single Prodect -->
                 <div class="new-product-item swiper-slide">
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
                             <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom Chair</a></h5>
                             <span class="price">
                                 <span class="new">$38.50</span>
                             </span>
                         </div>
                     </div>
                 </div>
                 <!-- Single Prodect -->
                 <div class="new-product-item swiper-slide">
                     <div class="product">
                         <div class="thumb">
                             <a class='image' href='shop-left-sidebar.html'>
                                 <img src="<?= assetss ?>assetsUser/images/product-image/9.jpg" alt="Product" />
                                 <img class="hover-image" src="<?= assetss ?>assetsUser/images/product-image/10.jpg" alt="Product" />
                             </a>
                             <span class="badges">
                                 <span class="sale">-5%</span>
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
                             <h5 class="title"><a href='shop-left-sidebar.html'>Living & Bedroom Table</a></h5>
                             <span class="price">
                                 <span class="new">$38.50</span>
                                 <span class="old">$40.50</span>
                             </span>
                         </div>
                     </div>
                 </div>
                 <!-- Single Prodect -->
             </div>
             <!-- Add Arrows -->
             <div class="swiper-buttons">
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
             </div>
         </div>
     </div>
 </div>