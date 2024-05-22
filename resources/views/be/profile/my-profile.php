<section class="main_content dashboard_part">


    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <img style="width: 60%; height: 200px; border-radius: 50%;" src="<?= ROOT_URL ?><?= $profile[0]['image'] ?>" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-2">
                        <label for=""><b>Họ và tên</b></label>
                        <span><?php

                                echo $profile[0]['name'] ?></span>
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
                    <button class="btn btn-primary" id="editProfile" data-url="<?= ROOT_URL ?>admin/profile/edit/user/<?= $_SESSION['id'] ?>">chỉnh sửa</button>
                </div>
            </div>
            <form action="<?= ROOT_URL ?><?= administrators ?>/profile/edit/user/<?= $_SESSION['id'] ?>"  method="post" enctype="multipart/form-data">
                <div class="form-edit-information" style="margin: 100px 0px;">
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        var editProfileAdmin = document.querySelector("#editProfile");
                        var showProfileAdmin = document.querySelector(".form-edit-information");
                        var url = editProfileAdmin.dataset.url;

                        editProfileAdmin.addEventListener("click", function() {
                            if (url) {
                                var xhr = new XMLHttpRequest();
                                xhr.open('GET', url);
                                xhr.setRequestHeader('Content-Type', 'application/json');

                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        var informationAdmin = JSON.parse(xhr.responseText);
                                        console.log(informationAdmin);
                                        showProfileAdmin.innerHTML = `
                                             <div class="col-lg-12 mb-3">
                                    
                                                <label for="" class="form-label">Hình ảnh</label><br>
                                                <input type="file" class="w-100 p-2"  name="image">
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <label for="" class="form-label">Họ và tên </label><br>
                                                <input type="text" class="w-100 p-2" name="name" value = "${informationAdmin[0].name}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Số điện Thoại</label><br>
                                                <input type="number" class="w-100 p-2" name="phone"  value = "${informationAdmin[0].phone}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Địa Chỉ</label><br>
                                                <input type="text" class="w-100 p-2" name="address" value = "${informationAdmin[0].address}">
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
</section>