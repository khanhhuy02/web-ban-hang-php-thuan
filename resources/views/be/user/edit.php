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


                <form action="<?= ROOT_URL ?><?=administrators?>/edit/user/<?= $lists['id'] ?>" method="post" enctype="multipart/form-data" class="row">
                    <!-- ĐIỆN THOẠI START -->
                    <div class="row ">
                        <div class="col-12">
                            <div class="white_card position-relative mb_20">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 align-self-center"><img src="" alt="" class="mx-auto d-block" height="50%" width="50%">

                                            <img src="<?=$lists['image']?? null ?>" alt="">

                                        </div>

                                        <div class="col-lg-6 align-self-center">
                                            <div class="single-pro-detail">
                                                <p class="mb-1">Họ và tên</p>
                                                <div class="custom-border mb-3"></div>
                                                <p><?=$lists['name']?? null ?></p>
                                                <div class="mb-3"></div>

                                                <div class="row">
                                                    <div class="col-4 ml-2">
                                                        <label for="">Email</label>
                                                        <p><?=$lists['email']?? null ?></p>
                                                    </div>
                                                </div>


                                                <div class="mt-2 mb-3">
                                                    <label for="" class="mb-2">Vai trò</label> <br>
                                                    <label for="">Khách hàng </label>
                                                    <input type="radio" name="role" value="0">

                                                    <label for="" style="margin-left: 20px;">Quản trị viên</label>
                                                    <input type="radio" name="role" value="1" checked>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <input type="submit" class="white_btn3" value="Cập nhật">
                        </div>
                    </div>
                    <!-- ĐIỆN THOẠI END -->




                    <!-- MÁY TÍNH BÀN END -->
                </form>





            </div>

        </div>