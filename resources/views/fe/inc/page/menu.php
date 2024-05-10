<div class="section pt-100px pb-100px">
    <div class="container">
        <div class="category-slider swiper-container" data-aos="fade-up">
            <div class="category-wrapper swiper-wrapper">
                <!-- Single Category -->
                <?php
                foreach ($list as $key => $value) {
                ?>
                    <div class=" swiper-slide">
                        <a class='category-inner ' href='shop-left-sidebar.html'>
                            <div class="category-single-item">
                                <img src="<?= assetss?>assetsUser/images/icons/1.png" alt="">
                                <span class="title"><?=$value['names']?></span>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>