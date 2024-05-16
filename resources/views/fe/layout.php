
<?php
switch ($titleTag) {


    case "Đăng nhập":
        include_once __DIR__ . "/inc/header.php";
        // include_once __DIR__ . "/inc/page/menuBarPC.php"; // thanh chuyển trang
        // include_once __DIR__ . "/inc/page/menuBarmobile.php"; // thanh chuyển trang
        // include_once __DIR__ . "/inc/page/banner.php"; // trang quảng cáo
        // include_once __DIR__ . "/inc/page/menu.php"; // thanh menu

        include_once $ViewPast;
        include_once __DIR__ . "/inc/footer.php";
        break;



    case "Trang chủ":
        include_once __DIR__ . "/inc/header.php";
        include_once __DIR__ . "/inc/page/menuBarPC.php"; // thanh chuyển trang
        include_once __DIR__ . "/inc/page/menuBarmobile.php"; // thanh chuyển trang
        include_once __DIR__ . "/inc/page/banner.php"; // trang quảng cáo
        include_once __DIR__ . "/inc/page/menu.php"; // thanh menu

        include_once $ViewPast;
        include_once __DIR__ . "/inc/footer.php";
        break;

    case "Trang chi tiết":
        include_once __DIR__ . "/inc/header.php";
        include_once __DIR__ . "/inc/page/menuBarPC.php"; // thanh chuyển trang
        include_once __DIR__ . "/inc/page/menuBarmobile.php"; // thanh chuyển trang
        include_once __DIR__ . "/inc/page/banner.php"; // trang quảng cáo
        // include_once __DIR__ . "/inc/page/menu.php"; // thanh menu

        include_once $ViewPast;
        include_once __DIR__ . "/inc/footer.php";
        break;

    case "Trang không tồn tại":
        include_once __DIR__ . "/inc/header.php";
        include_once $ViewPast;
        include_once __DIR__ . "/inc/footer.php";
        break;
    default :
    redirect('trang-khong-ton-tai');
    break;

}

?>

