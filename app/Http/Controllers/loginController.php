<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login($id = null, $pass = null)
    {
        if ($id == null && $pass == null) {
            echo "Login is required";
        } else if ($id == null || $pass == null) {
            echo "Password is required";
        } else if ($id == "admin" && $pass == "admin") {
            echo "welcome";
        } else {
            echo "Wrong user or passowrd";
        }
    }

}
