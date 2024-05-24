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
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Table</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="add_button ms-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table ">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên Sản Phẩm</th>
                                        <th scope="col">hình ảnh</th>
                                        <th scope="col">Loại Hàng</th>
                                        <th scope="col">Đồng cũ</th>
                                        <th scope="col">Giá Mới</th>
                                        <th scope="col">Ngày đăng</th>

                                        <th scope="col">Đã Bán</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $stt = 0;
                                     foreach ($list as $key => $item) { ?>
                                        <tr>
                                            <td><?=  $stt++?></td>
                                            <td><?= $item['name'] ?></td>
                                            <td><img src="<?=ROOT_URL.$item['image']?>" alt="" class="w-75"></td>

                                            <td>
                                                <?php
                                                echo $item['names'];
                                                ?>

                                            </td>
                                            <td><?= $item['price_new'] ?></td>
                                            <td><?= $item['price_old'] ?></td>
                                            <td><?= $item['meeting_day'] ?></td>
                                            <td>22</td>
                                            <td>
                                                <a href="<?= ROOT_URL ?>admin/eidt/products/<?=$item['id'] ?>" class="status_btn">sữa</a>
                                                <a href="<?= ROOT_URL ?>admin/list/products/<?=$item['id'] ?>" class="status_btn" style="background-color: red;">Xóa</a> <a href="../thong-tin/addInformation.php" class="status_btn" style="background-color: blue;">update nội dung</a>
                                            </td>
                                        </tr><?php } ?>
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>