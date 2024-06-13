<?php

namespace App\Http\Controllers\fronend\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\comment;
use App\Models\Product;
use Support\relationship\BelongsTo;

class ShopController extends Controller
{

    public function detail($cate, $name)
    {
        $titleTag = "Trang chi tiết";
        $detail = BelongsTo::BelongsToDetailProduct('products', "categories", "categories_id", "id", $cate, $name);

        // $commnen = comment::showId('comment', $detail[0]['id']);
        $commnen = BelongsTo::BelongsToDetailComment("comment", "users", "users_id", "id", $detail[0]['id']);

        return $this->view(
            "fe.shop.product-detail",
            [
                "titleTag" => $titleTag,
                "detail" => $detail,
                "commnen" => $commnen,
            ]
        );
    }
    public function cart()
    {
        $titleTag = "Trang giỏ hàng"; // Cart Page Title
        $checkUser = $_SESSION['user_id'];

        // Check if cart exists and is not empty (has at least one item)
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];


            // Verify each item in the cart belongs to the current user
            $filteredCart = array_filter($cart, function ($item) use ($checkUser) {
                // use là khai báo và truy cập các biến từ phạm vi lồng nhau hoặc kèm theo trong một hàm hoặc bao đóng. 
                //Nó cho phép bạn nhập các biến một cách rõ ràng vào phạm vi hiện tại, 
                // cho phép bạn sử dụng chúng mà không cần phải tham chiếu rõ ràng phạm vi kèm theo của chúng.
                // ví dụ use (variable1, variable2, ..., variableN);
                return $item['user_id'] === $checkUser;
            });


            // kiểm tra id user đã mua sản phẩm hay chưa lọc id của user nào của người đó
            if (!empty($filteredCart)) {
                $productIds = array_column($filteredCart, 'product_id');
                $lisCardProducts = Product::filterPro('products', $productIds);

                return $this->view(
                    "fe.shop.cart",
                    [
                        "titleTag" => $titleTag,
                        'lisCardProducts' => $lisCardProducts,
                        'filteredCart' => $filteredCart,

                    ]
                );
            } else {
                // kiểm tra sản phẩm có hay chưa 
                $emptyCartMessage = "Không có sản phẩm trong giỏ hàng của bạn."; // Empty Cart Message in Vietnamese

                return $this->view(
                    "fe.shop.cart",
                    [
                        "titleTag" => $titleTag,
                        'emptyCartMessage' => $emptyCartMessage
                    ]
                );
            }
        } else {
            // Cart is empty for all users, display empty message
            $emptyCartMessage = "Không có sản phẩm trong giỏ hàng của bạn."; // Empty Cart Message in Vietnamese

            return $this->view(
                "fe.shop.cart",
                [
                    "titleTag" => $titleTag,
                    'emptyCartMessage' => $emptyCartMessage
                ]
            );
        }
    }

    public function addCart()
    {
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];
        // $quantity = 1;

        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];

            $existingItemKey = -1;  // -1 
            foreach ($cart as $key => $item) {
                /*
                cart = [
                    product_id' => 11,
                    'price_new' => 123.233,
                    'image' =>asc.jpg,
                    'names' => sv,
                    'user_id' => 123
                    'quantity' =>1,
                ]
                */
                if ($item['product_id'] === $productId) { // kiem tra bang id hay ko
                    $existingItemKey = $key; // neu bang thi key  quantity gan cho existingItemKey
                    break;
                }
            }


            if ($existingItemKey !== -1) { // kiem tra bang -1 hay ko 
                $cart[$existingItemKey]['quantity'] += $quantity;
            } else {
                $user = $_SESSION['user_id'];
                $data = [
                    'product_id' => $productId,
                    'price_new' => $_POST['price_new'],
                    'image' => $_POST['image'],
                    'names' => $_POST['names'],
                    'user_id' => $user,
                    'quantity' => $quantity,
                ];
                $cart[] = $data;
            }

            $_SESSION['cart'] = $cart;
        } else {
            $user = $_SESSION['user_id'];
            $data = [
                'product_id' => $productId,
                'price_new' => $_POST['price_new'],
                'image' => $_POST['image'],
                'names' => $_POST['names'],
                'user_id' => $user,
                'quantity' => $quantity,
            ];
            $_SESSION['cart'] = array($data);
        }
    }

    public function quantityss($productId)
    {
        if (isset($_POST["product_id"])) {
            $productId = $_POST["product_id"];
            $quantity = $_POST["quantity"];

            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];

                foreach ($cart as $key => $value) {
                    if ($value['product_id'] === $productId) {
                        $cart[$key]['quantity'] = intval($quantity);
                    }
                }
                $_SESSION['cart'] = $cart;
                $responseData = [
                    'success' => true,
                    'message' => 'Quantity updated successfully',
                    "cart" => $_SESSION['cart']
                ];
                // header('Content-Type: application/json');

                echo json_encode($responseData);
                // var_dump($responseData);
                // exit; // Thêm dòng này để ngăn mã PHP tiếp tục thực thi
            }
        }
    }
    public function deleteCart($productId)
    {
        if (isset($_POST["product_id"])) {
            $productId = $_POST["product_id"];

            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];


                foreach ($cart as $key => $value) {
                    if ($value['product_id'] === $productId) {
                        unset($cart[$key]);
                    }
                }
                $_SESSION['cart'] = $cart;

                $responseData = [
                    'success' => true,
                    'message' => 'Product deleted successfully',

                ];
                echo json_encode($responseData);
            } else {
                $responseData = [
                    'success' => false,
                    'message' => 'Cart is empty'
                ];

                echo json_encode($responseData);
            }
        } else {
            $responseData = [
                'success' => false,
                'message' => 'Invalid request'
            ];
            echo json_encode($responseData);
        }
    }

    public function checkOut()
    {
        $titleTag = "Thanh toán giỏ hàng";
        $checkUser = $_SESSION['user_id'];
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
            $filteredCart = array_filter($cart, function ($item) use ($checkUser) {
                // use là khai báo và truy cập các biến từ phạm vi lồng nhau hoặc kèm theo trong một hàm hoặc bao đóng. 
                //Nó cho phép bạn nhập các biến một cách rõ ràng vào phạm vi hiện tại, 
                // cho phép bạn sử dụng chúng mà không cần phải tham chiếu rõ ràng phạm vi kèm theo của chúng.
                // ví dụ use (variable1, variable2, ..., variableN);
                return $item['user_id'] === $checkUser;
            });
            return $this->view("fe.shop.checkout", [
                'titleTag' => $titleTag,
                "cart" => $filteredCart
            ]);
        }
    }

    public function cartSuccess()
    {
        $checkUser = $_SESSION['user_id'];

        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {


            $cart = $_SESSION['cart'];
            $filteredCart = array_filter($cart, function ($item) use ($checkUser) {
                return $item['user_id'] === $checkUser;
            });

            if ($filteredCart) {
                $data1 = [
                    'users_id' => $checkUser,
                    'name' => $_POST['name'],
                    'addess' => $_POST['addess'],
                    'phone' => $_POST['phone'],
                    'email' => $_POST['email'],
                    'note' => $_POST['note'],
                ];
            }
            $order_id = Product::insertOrder('orders', $data1); // Thêm đơn hàng và lấy ID của đơn hàng

            if ($order_id) {
                foreach ($filteredCart as $item) {
                    $data2 = [
                        'orders_id' => $order_id,
                        'products_id' => $item['product_id'],
                        'quantity' => $item['quantity'],
                        'product_price' => $item['price_new'],
                    ];

                    Product::insertOrderItem('order_items', $data2); // Thêm mục đơn hàng
                }
                redirect("gio-hang");
            }
        }
    }
    public function shop()
    {

        $titleTag = "cửa hàng";

        $product  = BelongsTo::BelongsToProduct("products", "categories", "id", "categories_id",  8, 0);
        $list  = Category::Category("categories");
        return $this->view(
            "fe.shop.shop-product",
            [
                "titleTag" => $titleTag,
                "product" => $product,
                'list' => $list

            ]
        );
    }

    public function shops($alias_sp)
    {
        $titleTag = "cửa hàng";
        $product = BelongsTo::BelongsShop("products", "categories", "categories_id", "id", $alias_sp, 8, 0);
        $list  = Category::Category("categories");
        return $this->view(
            "fe.shop.shop-product",
            [
                "titleTag" => $titleTag,
                "product" => $product,
                'list' => $list

            ]
        );
    }
}
