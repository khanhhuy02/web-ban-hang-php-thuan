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

                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_30 f_w_700 dark_text">Sản Phẩm</h3>
                                <ol class="breadcrumb page_bradcam mb-0">
                                    <li class=""><a>Admin</a> \ </li>
                                    <li class="breadcrumb-item active">Sản phẩm</li>
                                </ol>
                            </div>
                            <!-- nut chọn đăng sản phẩm start-->
                            <div class="white_card_header">
                                <div class="bulder_tab_wrapper">
                                    <ul class="nav" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="iphone-tab" data-bs-toggle="tab" href="#iphone" role="tab" aria-controls="iphone" aria-selected="true">Điện thoại</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Lablet-tab" data-bs-toggle="tab" href="#Lablet" role="tab" aria-controls="Lablet" aria-selected="false">Lablet</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="PC-tab" data-bs-toggle="tab" href="#PC" role="tab" aria-controls="PC" aria-selected="false">PC</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Laptop-tab" data-bs-toggle="tab" href="#Laptop" role="tab" aria-controls="Laptop" aria-selected="false">Laptop</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                    <a class="nav-link" id="aside-tab" data-bs-toggle="tab" href="#aside" role="tab" aria-controls="aside" aria-selected="false">aside</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="footer_tb-tab" data-bs-toggle="tab" href="#footer_tb" role="tab" aria-controls="aside" aria-selected="true">footer</a>
                                </li> -->
                                    </ul>
                                </div>
                            </div>
                            <!-- nut chọn đăng sản phẩm end -->


                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">

                    <form action="<?= ROOT_URL ?>admin/create/product" method="post" enctype="multipart/form-data" class="tab-pane fade row active" id="iphone" role="tabpanel" aria-labelledby="iphone-tab">
                        <!-- ĐIỆN THOẠI START -->
                        <div class="row ">
                            <div class="col-12">
                                <div class="white_card position-relative mb_20">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 align-self-center"><img src="" alt="" class="mx-auto d-block" height="50%" width="50%">

                                                <input type="file" name="image" class="mt-5">
                                                <?php if (isset($errors)) : ?>
                                                    <span style="color: brown;"><?php echo $errors; ?></span>
                                                <?php endif; ?>
                                                <input type="file" name="sub_image[]" class="mt-2" multiple>

                                            </div>

                                            <div class="col-lg-6 align-self-center">
                                                <div class="single-pro-detail">
                                                    <p class="mb-1">Điện thoại</p>
                                                    <div class="custom-border mb-3"></div>

                                                    <input type="text" name="name" id="" class="p-2 col-10" placeholder="Tên sản phẩm....">
                                                    <div class="mb-3"></div>

                                                    <div class="row">
                                                        <div class="col-4 ml-2">
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
                                                            <select name="categories_id" class="form-select form-select-sm main-categories-id" aria-label="Small select example">
                                                                <?php foreach ($listCat as $item) : ?>
                                                                    <option value="<?= $item['id'] ?>" data-url="<?= ROOT_URL ?>/admin/create/product/<?= $item['id'] ?>">
                                                                        <?= $item['names'] ?>
                                                                    </option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="" class="">Hãng</label>
                                                            <span class="text"></span>
                                                            <select name="brands_id" id="subcategory" class="form-select form-select-sm subcategory" aria-label="Small select example">
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- <h6 class="text-muted font_s_13 mt-2 mb-1">Features :</h6>
                                    <ul class="list-unstyled pro-features border-0">
                                        <li>It is a long established fact that a reader will be distracted.</li>
                                        <li>Contrary to popular belief, Lorem Ipsum is not text.</li>
                                    </ul> -->
                                                    <!-- <h6 class="text-muted font_s_13 d-inline-block align-middle me-2">Biến thể </h6>
                                    <div class="radio2 radio-info2 form-check-inline ms-2">
                                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                        <label class="form-label" for="inlineRadio1"></label>
                                    </div>
                                    <div class="radio2 radio-dark2 form-check-inline">
                                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                        <label class="form-label" for="inlineRadio2"></label>
                                    </div> -->
                                                    <div class=" mt-3 col-10 ">
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
                                                            <th scope="row">Camera sau</th>
                                                            <td colspan='3'><input type="text" name="camera_after" class="col-12 p-1"></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Vi xử lý (chip)</th>
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

                                                            <th scope="row">bộ lưu trữ</th>
                                                            <td colspan='3'><input type="text" name="capacity" class="col-12 p-1"></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sim</th>
                                                            <td colspan='3'><input type="text" name="sim" class="col-12 p-1"></td>
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

                                                    <textarea name="description" id="editor1" rows="100" cols="100"></textarea>

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





                    <!-- LAPTOP START -->

                    <form action="<?= ROOT_URL ?>admin/create/product" method="post" enctype="multipart/form-data" class="tab-pane fade row" id="Laptop" role="tabpanel" aria-labelledby="Laptop-tab">
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
                                                    <div class="custom-border mb-3"></div>
                                                    <input type="text" name="name" id="" class="p-2 col-8" placeholder="Tên sản phẩm....">
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
                                                            <select name="categories_id" class="form-select form-select-sm main-categories-id" aria-label="Small select example">
                                                                <?php foreach ($listCat as $item) : ?>
                                                                    <option value="<?= $item['id'] ?>" data-url="<?= ROOT_URL ?>/admin/create/product/<?= $item['id'] ?>">
                                                                        <?= $item['names'] ?>
                                                                    </option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="" class="">Hãng</label>
                                                            <span class="text"></span>
                                                            <select name="brands_id" id="subcategory" class="form-select form-select-sm subcategory" aria-label="Small select example">
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

                </div>


            </div>

        </div>
        <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- 
        <script>
            $(document).ready(function() {
                $('body').on('change', '.main-categories-id', function(e) {
                    let id = $(this).val();
                    let url = <?= ROOT_URL ?> +
                        '/admin/create/product/' + id;
                    let targetSelect = $('#subcategory');
                    let text = $('.text');

                    console.log(targetSelect);
                    alert(id);

                    $.ajax({
                        method: "GET",
                        url: url,
                        dataType: "json",
                        data: {
                            id: id
                        },
                        success: function(listBar) {
                            console.log(listBar);

                            $.each(listBar, function(index, item) {
                                var option = $('<option>').val(item.id).text(item.names);
                                selectElement.append(option);
                            });
                            // text.html(listBar);
                            // // console.log(listBar);
                            // alert(listBar);
                            // // $('#subcategory').empty()

                            // for (let i = 0; i < listBar.length; i++) {
                            //     targetSelect.append(`<option>${listBar}</option>`);

                            // }
                            // // var obj = JSON.parse(listBar);
                            // $.each(listBar, (key, val) =>{
                            //     console.log(key);
                            //     console.log(val); //depending on your data, you might call val.url or whatever you may have
                            //     targetSelect.append(`<option>${val}</option>`);
                            // });

                            // $.each(listBar, function(xs) {
                            //     $('#subcategory').append($("<option>", {
                            //         text: xs
                            //     }));
                            // });


                            // targetSelect.html('<option value="">Select</option>')
                            // $.each(data, function(i, item) {
                            //     targetSelect.append(`<option value="${item.id}">${item.name}</option>`);
                            // })

                            // var options = '';
                            // for (var i = 0; i < listBar.length; i++) {
                            //     var item = listBar[i];
                            //     options += '<option value="' + item.id + '">' + item.names + '</option>';
                            // }

                            // // Gắn danh sách tùy chọn vào phần tử <select>
                            // selectElement.html(options);




                        },
                        error: function(xhr, status, error) {
                            let errorMessage = `Error fetching sub-categories: ${error}`;
                            if (xhr.status === 404) {
                                errorMessage = 'Sub-category not found for the selected main category.';
                            }
                            // console.error(errorMessage);
                            // Consider displaying an error message to the user
                        }
                    });
                });

                // $('body').on('change', '.sub-category', function(e) {
                //     let selectedSubCategoryId = $(this).val();
                //     // Implement logic to handle sub-category selection here
                //     // For example, make another AJAX request to fetch product details or update UI elements
                //     console.log('Sub-category selected:', selectedSubCategoryId);
                // });
            });
        </script> -->

        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->


        <script>
            $(document).ready(function() {
                $('.main-categories-id').change(function() {
                    var selectedOption = $(this).find('option:selected');
                    var url = selectedOption.data('url');

                    if (url) {
                        $.ajax({
                            url: url,
                            method: 'GET',
                            dataType: 'json',
                            success: function(listBar) {
                                var selectElement = $('#subcategory');
                                selectElement.empty();
                                console.log(listBar);

                                $.each(listBar, function(index, item) {
                                    var option = $('<option>').val(item.id).text(item.names);
                                    selectElement.append(option);
                                });
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    }
                });
            });
        </script>