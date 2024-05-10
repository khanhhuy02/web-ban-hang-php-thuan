
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
                                <button type="submit"> <img src="<?=assetss?>assetsAdmin/img/icon/icon_search.svg" alt> </button>
                            </form>
                        </div>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a href="#"> <img src="<?=assetss?>assetsAdmin/img/icon/bell.svg" alt> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="<?=assetss?>assetsAdmin/img/icon/msg.svg" alt> </a>
                            </li>
                        </div>
                        <div class="profile_info">
                            <img src="<?=assetss?>assetsAdmin/img/client_img.png" alt="#">
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

                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0">Loại Sản Phẩm</h3>
                            </div>
                        </div>
                        <form>
                            <div class="row justify-content-center">
                                <div class="mb-3 col-lg-4">
                                    <label class="form-label" for="exampleFormControlInput1">Tên Sản Phẩm</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3 col-lg-4">
                                    <label class="form-label" for="exampleFormControlInput1">Đồng Giá</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3 col-lg-4">
                                    <label class="form-label" for="exampleFormControlInput1">Giảm Giá</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1">
                                </div>

                                <div class="mb-3 col-lg-4">
                                    <label class="form-label" for="exampleFormControlInput1">Hình Ảnh</label>
                                    <input type="file" name='hinh' class="form-control" id="inputGroupFile01">
                                </div>

                                <div class="mb-3 col-lg-4 ">
                                    <label class="form-label" for="exampleFormControlInput1">Ngày Đăng</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <!-- <div class="mb-3 col-lg-4 ">
                                    <label class="form-label" for="exampleFormControlInput1">Tên loại</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1">
                                </div> -->
                                <div class="mb-3 col-lg-4 ">
                                    <label class="form-label" for="exampleFormControlInput1">Loại Hàng</label>
                                    <select class="form-select form-control-sm ">
                                        <option>Small select</option>
                                    </select>
                                </div>

                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-info" id="inputGroupFile01" style="float:right" value="CẬP NHẬT">
                            </div>
                        </form>
                    </div>
                </div>


            </div>

        </div>
