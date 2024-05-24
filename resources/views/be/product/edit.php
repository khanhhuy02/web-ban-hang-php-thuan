<section class="main_content dashboard_part">
    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area">
                        <div class="search_inner">
                            <form action="#">
                                <div class="search_field">
                                    <input type="text" placeholder="Search here...">
                                </div>
                                <button type="submit"> <img src="<?= assetss ?>assetsAdmin/img/icon/icon_search.svg" alt> </button>
                            </form>
                        </div>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a href="#"> <img src="<?= assetss ?>assetsAdmin/img/icon/bell.svg" alt> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="<?= assetss ?>assetsAdmin/img/icon/msg.svg" alt> </a>
                            </li>
                        </div>
                        <div class="profile_info">
                            <img src="<?= assetss ?>assetsAdmin/img/client_img.png" alt="#">
                            <div class="profile_info_iner">
                                <p>Welcome Admin!</p>
                                <h5>Taravor James</h5>
                                <div class="profile_info_details">
                                    <a href="#">My Profile <i class="ti-user"></i></a>
                                    <a href="#">Settings <i class="ti-settings"></i></a>
                                    <a href="#">Log Out <i class="ti-shift-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">


                <?php foreach ($listCat as $cate => $item) {
                    if ($item['id'] == $lists['categories_id'] && $item['classify'] == 1) { ?>

                        <form action="<?= ROOT_URL ?>admin/edit/product/<?= $lists['id'] ?>" method="post" enctype="multipart/form-data" class="row">
                            <!-- ĐIỆN THOẠI START -->
                            <div class="row ">
                                <div class="col-12">
                                    <div class="white_card position-relative mb_20">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 align-self-center"><img src="" alt="" class="mx-auto d-block" height="50%" width="50%">

                                                    <input type="file" name="image" class="mt-5" value="<?php echo $lists['image'] ?>">
                                                    <?php if (isset($errors)) : ?>
                                                        <span style="color: brown;"><?php echo $errors; ?></span>
                                                    <?php endif; ?>
                                                    <input type="file" name="sub_image[]" class="mt-2" multiple>

                                                </div>

                                                <div class="col-lg-6 align-self-center">
                                                    <div class="single-pro-detail">
                                                        <p class="mb-1">Điện thoại</p>
                                                        <div class="custom-border mb-3">
                                                            <label for="">Tên sản phẩm</label> <br>
                                                            <input type="text" name="name" id="title" class="p-2 col-10" onkeyup="ChangeToSlug();">
                                                        </div>
                                                        <br>
                                                        <div>
                                                            <label for="">Đương đẫn sản phẩm</label> <br>
                                                            <input type="text" id="slug" value="<?php echo $lists['alias_sp'] ?>" size="50" name="alias_sp" />
                                                        </div>
                                                        <div class="mb-3"></div>

                                                        <div class="row">
                                                            <div class="col-4 ml-2">
                                                                <label for="">Giá cả</label>
                                                                <input type="number" name="price_old" value="<?php echo $lists['price_old'] ?>">
                                                            </div>


                                                            <div class="col-4">
                                                                <label for="">Giá giảm</label>
                                                                <input type="number" name="price_new" value="<?php echo $lists['price_new'] ?>">
                                                            </div>
                                                        </div>


                                                        <div class="mt-2 mb-3">
                                                            <label for="" class="mb-2">Ẩn hiện</label> <br>
                                                            <label for="">Ẩn </label>
                                                            <input type="radio" name="hidden" value="0">

                                                            <label for="" style="margin-left: 20px;">hiện</label>
                                                            <input type="radio" name="hidden" value="1" checked>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-4">
                                                                <label for="">Loại</label>
                                                                <select name="categories_id" class="form-select form-select-sm main-categories-id" aria-label="Small select example">
                                                                    <?php foreach ($listCat as $item) : ?>
                                                                        <option value="<?= $item['id'] ?>" data-url="<?= ROOT_URL ?>admin/create/product/<?= $item['id'] ?>/<?= $item['alias'] ?>"><?= $item['names'] ?></option>
                                                                    <?php endforeach ?>

                                                                </select>
                                                            </div>
                                                            <div class="col-4">
                                                                <label for="">Hãng</label>
                                                                <select name="brands_id" id="subcategory" class="form-select form-select-sm subcategory" aria-label="Small select example">

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=" mt-3 col-10 ">
                                                            <label for="">Số lượng trong kho </label>

                                                            <input class="form-control form-control-sm" name="quantity" type="number" min="0" value="<?php echo $lists['quantity'] ?>" id="example-number-input">
                                                            <!-- <a href="" class="btn theme_bg_6 text-white px-4 d-inline-block "><i class="fa fa-cart-plus me-2"></i>Add to Cart</a> -->
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="custom-border mb-5"></div>

                                                    <table class="table">
                                                        <thead>
                                                            <tr>

                                                                <th scope="col" colspan='4' style="text-align: center;">
                                                                    <h2>Thông tin sản phẩm</h2>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Màng Hình</th>
                                                                <td colspan='3'><input type="text" name="screen" class="col-12 p-1" value="<?php echo $lists['screen'] ?>"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Hệ điều hành</th>
                                                                <td colspan='3'><input type="text" name="operating_system" class="col-12 p-1" value="<?php echo $lists['operating_system'] ?>"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Camera Trước</th>
                                                                <td colspan='3'><input type="text" name="camera_before" class="col-12 p-1" value="<?php echo $lists['camera_before'] ?>"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Camera sau</th>
                                                                <td colspan='3'><input type="text" name="camera_after" class="col-12 p-1" value="<?php echo $lists['camera_after'] ?>"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Vi xử lý (chip)</th>
                                                                <td colspan='3'><input type="text" name="chip" class="col-12 p-1" value="<?php echo $lists['chip'] ?>"></td>
                                                                <td></td>
                                                                <td></td>
                                                            <tr>
                                                                <th scope="row">Ram</th>
                                                                <td colspan='3'><input type="text" name="ram" class="col-12 p-1" value="<?php echo $lists['ram'] ?>"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>

                                                                <th scope="row">bộ lưu trữ</th>
                                                                <td colspan='3'><input type="text" name="capacity" class="col-12 p-1" value="<?php echo $lists['capacity'] ?>"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Sim</th>
                                                                <td colspan='3'><input type="text" name="sim" class="col-12 p-1" value="<?php echo $lists['sim'] ?>"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Dung lượng pin</th>
                                                                <td colspan='3'><input type="text" name="pin" class="col-12 p-1" value="<?php echo $lists['pin'] ?>"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">ngày ra mắt sản phẩm</th>
                                                                <td colspan='3'><input type="date" name="meeting_day" class="col-12 p-1"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>


                                                <div class="row">
                                                    <div class="col-12">

                                                        <textarea name="description" id="editor1" rows="100" cols="100">

                                                        <?php echo $lists['description'] ?>
                                                        </textarea>

                                                    </div>

                                                    <script src="<?= assetss ?>assetsAdmin/ckeditor/ckeditor.js"></script>
                                                    <script>
                                                        CKEDITOR.replace('editor1');
                                                    </script>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <input type="submit" class="white_btn3" value="Thêm sản phẩm ">
                                </div>
                            </div>
                            <!-- ĐIỆN THOẠI END -->




                            <!-- MÁY TÍNH BÀN END -->
                        </form>

                    <?php
                    } else if ($item['id'] == $lists['categories_id'] && $item['classify'] == 2) { ?>
                        <!-- LAPTOP START -->
                        <form action="" method="post" enctype="multipart/form-data" class=" row">

                            <div class="row ">
                                <div class="col-12">
                                    <div class="white_card position-relative mb_20">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 align-self-center"><img src="" alt="" class="mx-auto d-block" height="50%" width="50%">
                                                    <input type="file" name="image" value="" class="mt-5">
                                                    <input type="file" name="sub_image[]" value="" class="mt-2" multiple>

                                                </div>

                                                <div class="col-lg-6 align-self-center">
                                                    <div class="single-pro-detail">
                                                        <p class="mb-1">Laptop</p>
                                                        <div class="custom-border mb-3">
                                                            <label for="">Tên sản phẩm</label> <br>
                                                            <input type="text" name="name" id="title" class="p-2 col-10" onkeyup="ChangeToSlug();">
                                                        </div>
                                                        <br>
                                                        <div>
                                                            <label for="">Đương đẫn sản phẩm</label> <br>
                                                            <input type="text" id="slug" value="<?php echo $lists['alias_sp'] ?>" size="50" name="alias_sp" />                                                        </div>
                                                        <div class="mb-3"></div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <label for="">Giá cả</label>
                                                                <input type="number" name="price_old">
                                                            </div>
                                                            <div class="col-4">
                                                                <label for="">Giá giảm</label>
                                                                <input type="number" name="price_new">
                                                            </div>
                                                        </div>

                                                        <div class="mt-2 mb-3">
                                                            <label for="" class="mb-2">Ẩn hiện</label> <br>
                                                            <label for="">Ẩn </label>
                                                            <input type="radio" name="hidden" value="0">

                                                            <label for="" style="margin-left: 20px;">hiện</label>
                                                            <input type="radio" name="hidden" value="1" checked>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-4">
                                                                <label for="">Loại</label>
                                                                <select name="categories_id" class="form-select form-select-sm" aria-label="Small select example">

                                                                    @foreach ($category_products as $item)
                                                                    <option value="{{$item->id}}">{{$item->names}}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="col-4">
                                                                <label for="">Hãng</label>
                                                                <select name="brands_id" class="form-select form-select-sm" aria-label="Small select example">

                                                                    @foreach ($category_brand as $item)
                                                                    <option value="{{$item->id}}">{{$item->names}}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=" mt-3">
                                                            <label for="">Số lượng trong kho </label>

                                                            <input class="form-control form-control-sm" name="quantity" type="number" min="0" value="0" id="example-number-input">
                                                            <!-- <a href="" class="btn theme_bg_6 text-white px-4 d-inline-block "><i class="fa fa-cart-plus me-2"></i>Add to Cart</a> -->
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="custom-border mb-5"></div>

                                                    <table class="table">
                                                        <thead>
                                                            <tr>

                                                                <th scope="col" colspan='4' style="text-align: center;">
                                                                    <h2>Thông tin sản phẩm</h2>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Màng Hình</th>
                                                                <td colspan='3'><input type="text" name="screen" class="col-12 p-1"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Hệ điều hành</th>
                                                                <td colspan='3'><input type="text" name="operating_system" class="col-12 p-1"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Camera Trước</th>
                                                                <td colspan='3'><input type="text" name="camera_before" class="col-12 p-1"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">Vi xử lý (CPU)</th>
                                                                <td colspan='3'><input type="text" name="chip" class="col-12 p-1"></td>
                                                                <td></td>
                                                                <td></td>
                                                            <tr>
                                                                <th scope="row">Ram</th>
                                                                <td colspan='3'><input type="text" name="ram" class="col-12 p-1"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>

                                                                <th scope="row">bộ lưu trữ(ổ cứng)</th>
                                                                <td colspan='3'><input type="text" name="capacity" class="col-12 p-1"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Dung lượng pin</th>
                                                                <td colspan='3'><input type="text" name="pin" class="col-12 p-1"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">ngày ra mắt sản phẩm</th>
                                                                <td colspan='3'><input type="date" name="meeting_day" class="col-12 p-1"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>


                                                <div class="row">
                                                    <div class="col-12">

                                                        <textarea name="description" id="editor2" rows="50" cols="50"></textarea>

                                                    </div>

                                                    <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
                                                    <script>
                                                        CKEDITOR.replace('editor2');
                                                    </script>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <input type="submit" class="white_btn3" value="Thêm sản phẩm ">
                                </div>
                            </div>
                        </form>
                <?php    }
                } ?>



            </div>

        </div>