<?php

namespace App\Http\Controllers\backend\product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class productController extends Controller
{




    public function index()
    {
        $titleTag = "Danh sách sản phẩm";
        $list = Product::product();
        return $this->view("be.product.list", [
            'titleTag' => $titleTag,
            'list' => $list,
        ]);
    }

    public function ShowCre()
    {
        $titleTag = "Danh sách sản phẩm";

        $listCat = Category::Category();
        // $listBar = Brand::Brand();
        // $listCat = Category::filterCate('categories', 1);
        // $listBar = Brand::filterBra('brands',$id );

        return $this->view("be.product.create", [
            'titleTag' => $titleTag,
            'listCat' => $listCat,
            // 'listBar' => $listBar,
        ]);
    }


    public function ShowCreSub($id, $param)
    {
        $titleTag = "Danh sách sản phẩm";

        $listBar = Brand::filterBra('brands', $id, $param);
        $listCat = Category::Category();

        header('Content-Type: application/json');
        echo json_encode($listBar);
    }

    public function create()
    {
        $titleTag = "Danh sách sản phẩm";

        $errors = "";
        $hasError = false;
        $destination = "";

        $target_dir = "public/uploads/product/";
        $nameFileImage = $_FILES['image']['name'];
        $random_number = uniqid();
        $extension = pathinfo($nameFileImage, PATHINFO_EXTENSION);
        if (!($extension == "jpg" || $extension == "jpeg" || $extension == "png")) {
            $errors = "không đúng định dạng ảnh";
            $hasError = true;
        } else {
            $new_fileName = $random_number . '-product.' . $extension;
            $destination = $target_dir . $new_fileName;
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        }


        // echo '<br>';
        // var_dump($target);
        // echo '</br>';
        // exit;

        // $sub_files = $_FILES['sub_image']['name'];
        $sub_fileNames = [];

        foreach ($_FILES['sub_image']['name'] as $index => $item_sub_image) {
            //             // _FILES Array
            // (
            //     [0] => Screenshot 2024-03-20 233515.png
            //     [1] => Screenshot 2024-03-21 002321.png
            //     [2] => Screenshot 2024-03-24 164350.png
            // )
            $extension_sub_image = pathinfo($item_sub_image, PATHINFO_EXTENSION); //Lấy phần mở rộng của tệp tin nói chung là lấy cái đuôi (vd: jpg, png,....)
            $random_numbers = uniqid();
            $new_fileName_sub_image = $random_numbers . '-product.' . $extension_sub_image; // Tạo tên mới cho tệp tin (vd: 231-product-60a8f7c2a0e94.jpg)


            $sub_fileName = $target_dir .  $new_fileName_sub_image; // lấy tên ảnh Screenshot 2024-03-20 233515.png // Tạo đường dẫn đầy đủ cho tệp tin mới

            $tmp_name = $_FILES['sub_image']['tmp_name'][$index];
            move_uploaded_file($tmp_name, $sub_fileName);
            $sub_fileNames[] = $sub_fileName;  // chuyển về mảng [] 


        }
        $sub_image = implode(',', $sub_fileNames); // từ mảng chuyển về chuỗi để lưu vao database 

        $data = [
            'brands_id' => $_POST['brands_id'],
            'categories_id' => $_POST['categories_id'],
            'image' => $destination,
            'sub_image' => $sub_image,
            'name' => $_POST['name'],
            'price_old' => $_POST['price_old'],
            'price_new' => $_POST['price_new'],
            'hidden' => $_POST['hidden'],
            'quantity' => $_POST['quantity'],
            'screen' => $_POST['screen'],
            'operating_system' => $_POST['operating_system'],
            'camera_before' => $_POST['camera_before'],
            'camera_after' => $_POST['camera_after'],
            'chip' => $_POST['chip'],
            'ram' => $_POST['ram'],
            'chip' => $_POST['chip'],
            'capacity' => $_POST['capacity'],
            'sim' => $_POST['sim'],
            'pin' => $_POST['pin'],
            'meeting_day' => $_POST['meeting_day'],
            'chip' => $_POST['chip'],
            'description' => $_POST['description'],
        ];


        if ($hasError) {
            $listCat = Category::Category();
            $listBar = Brand::Brand();
            $this->view("be.product.create", [
                'titleTag' => $titleTag,
                'errors' => $errors,
                'listCat' => $listCat,
                'listBar' => $listBar,
            ]);
            redirect("admin/create/product");
        } else {
            Product::create('products', $data);
            redirect("admin/create/product");
        }
    }

    public function showEdi($id)
    {
        $titleTag = "Danh sách sản phẩm";
        $lists = Product::showID('products', $id);

        if ($lists) {
            $listCat = Category::Category();
            $listBar = Brand::Brand();
            return $this->view("be.product.edit", [
                'titleTag' => $titleTag,
                'listCat' => $listCat,
                'listBar' => $listBar,
                'lists' => $lists,
            ]);
        }
    }

    public function proEdi($id)
    {
        $titleTag = "Danh sách sản phẩm";
        $errors = "";
        $hasError = false;
        $existingProduct = Product::showID('products', $id);
        $destination = $existingProduct['image'] ?? '';

        $target_dir = "public/uploads/product/";
        $nameFileImage = $_FILES['image']['name'];
        $random_number = uniqid();
        $extension = pathinfo($nameFileImage, PATHINFO_EXTENSION);

        if (!empty($nameFileImage)) {
            if (!($extension == "jpg" || $extension == "jpeg" || $extension == "png")) {
                $errors = "không đúng định dạng ảnh";
                $hasError = true;
            } else {
                $new_fileName = $random_number . '-product.' . $extension;
                $destination = $target_dir . $new_fileName;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            }
        }

        $sub_fileNames = explode(',', $existingProduct['sub_image'] ?? '');

        if (!empty($_FILES['sub_image']['name'][0])) {
            foreach ($_FILES['sub_image']['name'] as $index => $item_sub_image) {
                $extension_sub_image = pathinfo($item_sub_image, PATHINFO_EXTENSION);
                $random_numbers = uniqid();
                $new_fileName_sub_image = $random_numbers . '-product.' . $extension_sub_image;

                $sub_fileName = $target_dir . $new_fileName_sub_image;

                $tmp_name = $_FILES['sub_image']['tmp_name'][$index];
                move_uploaded_file($tmp_name, $sub_fileName);
                $sub_fileNames[] = $sub_fileName;
            }
        }

        $sub_image = implode(',', $sub_fileNames);

        $data = [
            'brands_id' => $_POST['brands_id'],
            'categories_id' => $_POST['categories_id'],
            'image' => $destination,
            'sub_image' => $sub_image,
            'name' => $_POST['name'],
            'price_old' => $_POST['price_old'],
            'price_new' => $_POST['price_new'],
            'hidden' => $_POST['hidden'],
            'quantity' => $_POST['quantity'],
            'screen' => $_POST['screen'],
            'operating_system' => $_POST['operating_system'],
            'camera_before' => $_POST['camera_before'],
            'camera_after' => $_POST['camera_after'],
            'chip' => $_POST['chip'],
            'ram' => $_POST['ram'],
            'chip' => $_POST['chip'],
            'capacity' => $_POST['capacity'],
            'sim' => $_POST['sim'],
            'pin' => $_POST['pin'],
            'meeting_day' => $_POST['meeting_day'],
            'chip' => $_POST['chip'],
            'description' => $_POST['description'],
        ];

        if ($hasError) {
            $listCat = Category::Category();
            $listBar = Brand::Brand();
            $this->view("be.product.create", [
                'titleTag' => $titleTag,
                'errors' => $errors,
                'listCat' => $listCat,
                'listBar' => $listBar,
            ]);
            redirect("admin/edit/products/$id");
        } else {
            Product::update('products', $data, $id);
            redirect("admin/list/product");
        }
    }
    public function deletePros($id)
    {
        // Gọi phương thức xóa sản phẩm từ model
        $table = 'products';
        Product::deletePro($table, $id);
        redirect('admin/list/product');
    }
}
