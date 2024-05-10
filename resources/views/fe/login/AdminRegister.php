<section class="main_content dashboard_part">


    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">

                                <div class="modal-content cs_modal">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Đăng ký</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= ROOT_URL ?>dang-ky" method="post">
                                            <div>
                                                <label for="">Họ và tên</label><br>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                            <?php
                                            echo (!empty($errors['fullname'])) ? '<span style="color: red;">' . $errors['fullname']['required'] . '</span>' : false;
                                            ?>
                                            <div>
                                                <label for="">Email</label><br>
                                                <input type="text" class="form-control" name="email">

                                            </div>
                                            <div>
                                                <label for="">Mật khẩu</label><br>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <div>
                                                <!-- <label for="">Nhập lại mật khẩu </label><br>
                                                <input type="password" class="form-control" name="password_again">
                                            </div> -->
                                                <input type="submit" class="btn_1 full_width text-center" value="Đăng ký" name="login">

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>