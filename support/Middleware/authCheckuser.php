<?php

namespace Support\Middleware;

class authCheckuser
{

    // Function to check if the user is logged in 
    function isLoggedIn()
    {
        return isset($_SESSION['role']); // Kiểm tra xem biến $_SESSION['role'] đã được thiết lập hay chưa
    }

    // Function to check if the user is an admin
    function isAdmin()
    {
        return ($_SESSION['role'] == 1); // Kiểm tra giá trị của biến $_SESSION['role'], 1 đại diện cho quyền quản trị viên
    }


}
