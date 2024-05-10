
<?php
switch ($titleTag) {
    case "Trang chủ":
        include_once __DIR__ . "/inc/header.php";
        include_once __DIR__ . "/inc/page/menu.php";
        include_once $ViewPast;
        include_once __DIR__ . "/inc/footer.php";

        break;

    case "Danh sách sản phẩm":
        include_once __DIR__ . "/inc/header.php";
        include_once __DIR__ . "/inc/page/menu.php";
        include_once $ViewPast;
        include_once __DIR__ . "/inc/footer.php";

        break;


    case "Đăng nhập":
        include_once __DIR__ . "/inc/header.php";

        include_once $ViewPast;
        include_once __DIR__ . "/inc/footer.php";

        break;
}

?>

