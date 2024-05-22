<?php

namespace App\Http\Controllers\backend\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Support\relationship\BelongsTo;

class usersController extends Controller
{

    public function index()
    {
        $titleTag = "Danh sách quản trị";

        $user = User::list("users");
        return $this->view("be.user.list", [
            'titleTag' => $titleTag,
            "list" => $user
        ]);
    }


    public function showEdi($id)
    {
        $titleTag = "Danh sách quản trị";

        $user = User::showID("users", $id);
        return $this->view("be.user.edit", [
            'titleTag' => $titleTag,
            "lists" => $user
        ]);
    }

    public function userEdi($id)
    {

        $data = [
            "role" => $_POST['role']
        ];

        $success = User::update("users", $data, $id);
        if ($success) {
            redirect(administrators . "/list/user");
        }
    }
    public function deleteUse($id)
    {

        $success = User::delete("users", $id);
        if ($success) {
            redirect(administrators . "/list/user");
        }
    }


    public function profile()
    {

        $titleTag = "Danh sách quản trị";
        $profile = BelongsTo::BelongsToUser('users', "user_informations", "id", 'users_id', $_SESSION['id']);

        return $this->view("be.profile.my-profile", [
            'titleTag' => $titleTag,
            'profile' => $profile,
        ]);
    }

    //  edit information

    public function showProf($id)
    {
        $informationAdmin = BelongsTo::BelongsToUser('users', "user_informations", "id", 'users_id', $id);

        header('Content-Type: application/json');
        echo json_encode($informationAdmin);
    }

    public function editProf($id)
    {

        $data1 = [
            "name" => $_POST['name']
        ];

       User::update('users', $data1, $id);


        $target_dir = "public/uploads/personal/";
        $nameFileImage = $_FILES['image']['name'];
        $random_number = uniqid();
        $extension = pathinfo($nameFileImage, PATHINFO_EXTENSION);
        $existingUser = User::showIdOther('user_informations', 'users_id', $id);
        $destinations = $existingUser['image'] ?? '';
        // print_r( $nameFileImage );
        // exit;
        if (!empty($nameFileImage)) {

            if (!($extension == "jpg" || $extension == "jpeg" || $extension == "png")) {
                $errors = "không đúng định dạng ảnh";
                $hasError = true;
            } else {
                $new_fileName = $random_number . '-personal-photo.' . $extension;
                $destinations = $target_dir . $new_fileName;
                move_uploaded_file($_FILES['image']['tmp_name'], $destinations);
            }
        }

        $data2 = [
            "image" => $destinations,
            "phone" => $_POST['phone'],
            "address" => $_POST['address'],
        ];

        User::updateIdOther('user_informations',  $data2, "users_id", $id);

        redirect("admin/profile/user");
    }
}
