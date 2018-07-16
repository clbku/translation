<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex() {
        $data = User::data();
        echo $data;
        exit;
    }
}
