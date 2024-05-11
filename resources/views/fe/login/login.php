      <!-- breadcrumb-area start -->
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
                                  <li class="breadcrumb-item"><a href='index.html'>Home</a></li>
                                  <li class="breadcrumb-item active">Login</li>
                              </ul>
                              <!-- breadcrumb-list end -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- breadcrumb-area end -->
      <!-- login area start -->
      <div class="login-register-area pt-100px pb-100px">
          <div class="container">
              <div class="row">
                  <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                      <div class="login-register-wrapper">
                          <div class="login-register-tab-list nav">
                              <a class="active" data-bs-toggle="tab" href="#lg1">
                                  <h4>login</h4>
                              </a>
                              <a data-bs-toggle="tab" href="#lg2">
                                  <h4>register</h4>
                              </a>
                          </div>
                          <div class="tab-content">
                              <div id="lg1" class="tab-pane active">
                                  <div class="login-form-container">
                                      <div class="login-register-form">
                                          <form action="<?=ROOT_URL?>dang-nhap" method="post">
                                              <input type="text" name="email" placeholder="Username" id='fullname'/>
                                              <input type="password" name="password" placeholder="Password" />
                                              <div class="button-box">
                                                  <div class="login-toggle-btn">
                                                      <input type="checkbox" />
                                                      <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                      <a href="#">Forgot Password?</a>
                                                  </div>
                                                  <button type="submit"><span>Login</span></button>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <div id="lg2" class="tab-pane">
                                  <div class="login-form-container">
                                      <div class="login-register-form">
                                          <form action="<?=ROOT_URL?>dang-ky" method="post" id='form-1'>
                                              <div class="col-lg-12">
                                                  <label for="">Họ và tên</label>
                                                  <input type="text" name="name" placeholder="Họ và tên"  id="fullname"/>
                                                  <span class="form-message" style="color: red;"></span>
                                              </div>
                                              <div class="col-lg-12">
                                                  <label for="">Email</label>
                                                  <input type="email" name="email" placeholder="Nhập email" id="email"/>
                                                  <span class="form-message" style="color: red;"></span>

                                              </div>
                                              <div class="col-lg-12">
                                                  <label for="">Mật Khẩu</label>
                                                  <input type="password" name="password" placeholder="Nhập mật khẩu" id="password"/>
                                                  <span class="form-message" style="color: red;"></span>

                                              </div>
                                              <div class="col-lg-12">
                                                  <label for="">Nhập Lại mật khẩu</label>
                                                  <input type="password" name="password_again" placeholder="Nhập lại mật khẩu" id="password_again" />
                                                  <span class="form-message" style="color: red;"></span>
                                             
                                                </div>
                                             
                                              <div class="button-box">
                                                  <button type="submit"><span>Đăng ký</span></button>
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
      <!-- login area end -->
      <script src="<?= assetss ?>assetPHP/validate.js"></script>
      <script>
          // mong muốn của chúng ta
          Validator({
              form: "#form-1",
              errorSelector: ".form-message",
              rules: [
                  Validator.isRequired('#fullname', "vui lòng không được để trống"),
                  Validator.isEmail('#email', "vui lòng không được để trống"),
                  Validator.minLength('#password', 6, "vui lòng không được để trống"),
                  Validator.isRequired('#password_again'),
                  Validator.isConfirmed('#password_again', function() {
                      return document.querySelector('#form-1 #password').value;
                  }, "Nhâp lại mật khẩu không chính xác"),
              ],
              // onSubmit: function (data) {
              //     console.log(data);
              // }
          });
      </script>