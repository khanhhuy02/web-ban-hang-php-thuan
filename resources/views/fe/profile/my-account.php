<!-- account area start -->
<div class="checkout-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="ml-auto mr-auto col-lg-9">
                <div class="checkout-wrapper">
                    <div id="faq" class="panel-group">
                        <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>1 .</span> <a data-bs-toggle="collapse" class="collapsed" aria-expanded="true" href="#my-account-1">Edit your account information </a>
                                </h3>
                            </div>
                            <div id="my-account-1" class="panel-collapse collapse show" data-bs-parent="#faq">

                                <div class="panel-body">

                                    <div class="myaccount-info-wrapper">
                                        <div class="account-info-wrapper">
                                            <h4>Tài khoản của tôi</h4>
                                            <h5>Thông tin</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div>
                                                    <img style="width: 60%; height: 200px; border-radius: 50%;" src="<?= ROOT_URL ?><?= $profile[0]['image'] ?>" class="card-img-top" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="mt-2">
                                                    <label for=""><b>Họ và tên</b></label>
                                                    <span><?= $profile[0]['name'] ?></span>
                                                </div>
                                                <div class="mt-2">
                                                    <label for=""><b>Số Điện thoại</b></label>
                                                    <span><?= $profile[0]['phone'] ?></span>
                                                </div>
                                                <div class="mt-2">
                                                    <label for=""><b>Email</b></label>
                                                    <span><?= $profile[0]['email'] ?></span>
                                                </div>
                                                <div class="mt-2">
                                                    <label for=""><b>Địa chỉ</b></label>
                                                    <span><?= $profile[0]['address'] ?></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 editProfile">
                                                <button class="btn btn-primary" id="editProfile-user" data-url="<?= ROOT_URL ?>profile/edit/my-account/<?= $_SESSION['id'] ?>">chỉnh sửa</button>
                                            </div>
                                        </div>
                                        <form action="<?= ROOT_URL ?>/profile/edit/my-account/<?= $_SESSION['id'] ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-edit-information-user" style="margin: 100px 0px;">
                                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                <script>
                                                    var editProfileUser = document.querySelector("#editProfile-user");
                                                    var showProfileUser = document.querySelector(".form-edit-information-user");
                                                    var url = editProfileUser.dataset.url;

                                                    editProfileUser.addEventListener("click", function() {
                                                        if (url) {
                                                            var xhr = new XMLHttpRequest();
                                                            xhr.open('GET', url);
                                                            xhr.setRequestHeader('Content-Type', 'application/json');

                                                            xhr.onload = function() {
                                                                if (xhr.status === 200) {
                                                                    var informationUser = JSON.parse(xhr.responseText);
                                                                    // console.log(informationUser);
                                                                    showProfileUser.innerHTML = `
                                                                            <div class="col-lg-12 mb-3">
                                                                    
                                                                                <label for="" class="form-label">Hình ảnh</label><br>
                                                                                <input type="file" class="w-100 p-2"  name="image">
                                                                            </div>
                                                                            <div class="col-lg-12 mb-3">
                                                                                <label for="" class="form-label">Họ và tên </label><br>
                                                                                <input type="text" class="w-100 p-2" name="name" value = "${informationUser[0].name}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="" class="form-label">Số điện Thoại</label><br>
                                                                                <input type="number" class="w-100 p-2" name="phone"  value = "${informationUser[0].phone}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Địa Chỉ</label><br>
                                                                                <input type="text" class="w-100 p-2" name="address" value = "${informationUser[0].address}">
                                                                            </div>
                                                                            <div class="flex-row-reverse d-flex mb-2">
                                                                                <input type="submit" class="btn btn-primary" value="cập nhật">
                                                                            </div>
                                                                        `;
                                                                } else {
                                                                    console.error(xhr.statusText);
                                                                }
                                                            };

                                                            xhr.send();
                                                        }
                                                    });
                                                </script>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="400">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>2 .</span> <a data-bs-toggle="collapse" class="collapsed" aria-expanded="false" href="#my-account-2">Change your password </a></h3>
                            </div>
                            <div id="my-account-2" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    <div class="myaccount-info-wrapper">
                                        <div class="account-info-wrapper">
                                            <h4>Change Password</h4>
                                            <h5>Your Password</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="billing-info">
                                                    <label>Password</label>
                                                    <input type="password" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="billing-info">
                                                    <label>Password Confirm</label>
                                                    <input type="password" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="icon-arrow-up-circle"></i> back</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="submit">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="600">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>3 .</span> <a data-bs-toggle="collapse" class="collapsed" aria-expanded="false" href="#my-account-3">Modify your address book entries
                                    </a></h3>
                            </div>
                            <div id="my-account-3" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    <div class="myaccount-info-wrapper">
                                        <div class="account-info-wrapper">
                                            <h4>Address Book Entries</h4>
                                        </div>
                                        <div class="entries-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                    <div class="entries-info text-center">
                                                        <p>Jone Deo</p>
                                                        <p>hastech</p>
                                                        <p>28 Green Tower,</p>
                                                        <p>Street Name.</p>
                                                        <p>New York City,</p>
                                                        <p>USA</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                    <div class="entries-edit-delete text-center">
                                                        <a class="edit" href="#">Edit</a>
                                                        <a href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="icon-arrow-up-circle"></i> back</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="submit">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account m-0" data-aos="fade-up" data-aos-delay="800">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>4 .</span> <a href='wishlist.html'>Modify your wish
                                        list </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- account area end -->