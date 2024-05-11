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
                                        <form action="<?= ROOT_URL ?>dang-ky" method="post" id="form-1">
                                            <div>
                                                <label for="">Họ và tên</label><br>
                                                <input type="text" class="form-control" name="name" id="fullname">
                                                <span class="form-message"></span>
                                            </div>
                                            <div>
                                                <label for="">Email</label><br>
                                                <input type="text" class="form-control" name="email" id="email">
                                                <span class="form-message"></span>

                                            </div>
                                            <div>
                                                <label for="">Mật khẩu</label><br>
                                                <input type="password" class="form-control" name="password" id="password">
                                                <span class="form-message"></span>
                                            </div>
                                            <div>
                                                <label for="">Nhập lại mật khẩu </label><br>
                                                <input type="password" class="form-control" name="password_again" id="password_again">
                                                <span class="form-message"></span>

                                            </div>
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
<script src="<?=assetss?>assetPHP/validate.js"></script>
<script>
    // mong muốn của chúng ta
    Validator({
    form: "#form-1",
    errorSelector: ".form-message",
    rules: [
      Validator.isRequired('#fullname', "vui lòng không được để trống"),
      Validator.isEmail('#email',"vui lòng không được để trống"),
      Validator.minLength('#password', 6, "vui lòng không được để trống"),
      Validator.isRequired('#password_again'),
      Validator.isConfirmed('#password_again', function () {
        return document.querySelector('#form-1 #password').value;
      }, "Nhâp lại mật khẩu không chính xác"),
    ],
    // onSubmit: function (data) {
    //     console.log(data);
    // }
  });
    
</script>