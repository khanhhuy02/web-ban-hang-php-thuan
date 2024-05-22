<?php

namespace App\Http\Controllers\fronend\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Support\relationship\BelongsTo;

class usersController extends Controller
{

   public function index()
   {
      $titleTag = "Tài Khoản của tôi";
      $profile = BelongsTo::BelongsToUser('users', "user_informations", "id", 'users_id', $_SESSION['id']);

      return $this->view("fe.profile.my-account", [
         "titleTag" => $titleTag,
         'profile' => $profile,

      ]);
   }

   public function showProfUser($id)
   {
      $informationUser = BelongsTo::BelongsToUser('users', "user_informations", "id", 'users_id', $id);

      header('Content-Type: application/json');
      echo json_encode($informationUser);
   }

   public function editProfUser($id)
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
