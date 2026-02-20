<?php

include "User.php";
include "Admin.php";

use User\Register;
use Admin\Register as AdminRegister;

class Auth
{
    public static function user()
    {
        return Register::index();
    }
    public static function admin()
    {
        return AdminRegister::index();
    }
}

echo Auth::user();
echo "<br>";
echo Auth::admin();
