<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function postData(Request $requets) {
        if ($requets->file_data) {
            File::get($requets->file_data);
        }
        exit;
    }
}
