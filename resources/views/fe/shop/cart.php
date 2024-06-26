<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                        <h2 class="breadcrumb-title">Shop</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list text-center text-md-end">
                            <li class=""><a href='<?=ROOT_URL?>'>Home</a>/</li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Cart Area Start -->
<div class="cart-main-area pt-100px pb-100px">
    <div class="container">
        <h3 class="cart-page-title">Giỏ hàng </h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Hình</th>
                                    <th>Tiên Sản phẩm</th>
                                    <th>Giá Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th>trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $total_price_product = 0;
                                foreach ($filteredCart as $key => $value) { ?>
                                    <tr class="product-card">
                                        <td class="product-thumbnail">
                                            <input type="hidden" class="product-id" value="<?= $value['product_id'] ?>">
                                        </td>
                                        <td class="product-name"><img src="<?= $value['image'] ?>" alt="" class="w-100"></td>
                                        <td class="product-name"><a href="#"><?= $value['names'] ?></a></td>
                                        <td class="product-price-cart"><span class="amount"><?= $value['price_new'] ?></span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box quantity" type="text" name="qtybutton" value="<?= $value['quantity'] ?>" />
                                            </div>
                                        </td>
                                        <td class="productSubtotal">
                                            <?php $total_price = $value['price_new'] * $value['quantity'] ;
                                                echo $total_price;

                                            ?>
                                            
                                        </td>
                                        <td class="product-remove">
                                            <!-- <a href="#"><i class="icon-pencil"></i></a> -->
                                            <span class="delete-to-cart" style="cursor: pointer"> <i class="icon-close"></i></span>
                                        </td>
                                    </tr>
                                <?php 
                                $total_price_product +=$total_price;
                            } ?>
                                <?= $emptyCartMessage ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="#">Tiếp tục mua hàng</a>
                                </div>
                                <!-- <div class="cart-clear">
                                    <button>Update Shopping Cart</button>
                                    <a href="#">Clear Shopping Cart</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </form>
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-6 mb-lm-30px">
                        <div class="cart-tax">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                            </div>
                            <div class="tax-wrapper">
                                <p>Enter your destination to get a shipping estimate.</p>
                                <div class="tax-select-wrapper">
                                    <div class="tax-select">
                                        <label>
                                            * Country
                                        </label>
                                        <select class="email s-email s-wid">
                                            <option>Bangladesh</option>
                                            <option>Albania</option>
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Belgium</option>
                                        </select>
                                    </div>
                                    <div class="tax-select">
                                        <label>
                                            * Region / State
                                        </label>
                                        <select class="email s-email s-wid">
                                            <option>Bangladesh</option>
                                            <option>Albania</option>
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Belgium</option>
                                        </select>
                                    </div>
                                    <div class="tax-select mb-25px">
                                        <label>
                                            * Zip/Postal Code
                                        </label>
                                        <input type="text" />
                                    </div>
                                    <button class="cart-btn-2" type="submit">Get A Quote</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-6 col-md-6 mb-lm-30px">
                        <div class="discount-code-wrapper">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Sử dụng mã phiếu giảm giá</h4>
                            </div>
                            <div class="discount-code">
                                <p>Nhập mã phiếu giảm giá của bạn nếu bạn có.</p>
                                <form>
                                    <input type="text" required="" name="name" />
                                    <button class="cart-btn-2" type="submit">ÁP DỤNG PHIẾU GIẢM GIÁ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-md-30px">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Tổng số giỏ hàng</h4>
                            </div>
                            <!-- <h5>Total products <span>$260.00</span></h5>
                            <div class="total-shipping">
                                <h5>Total shipping</h5>
                                <ul>
                                    <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                    <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                </ul>
                            </div> -->
                            <h4 class="grand-totall-title">Tổng giá sản phẩm <span class="total-price-product"><?php echo $total_price_product?></span></h4>
                            <a href='<?=ROOT_URL?>thanh-toan-tai-khoan'>Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->