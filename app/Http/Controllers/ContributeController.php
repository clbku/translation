<?php

namespace App\Http\Controllers;

use App\Contribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContributeController extends Controller
{

    public function getdata() {
        var_dump(Contribute::getDataByOriginalIdAndLang('5b4852751e75c70bb438402c', 'vi'));
        exit();
    }
    public function postData(Request $requets) {
        if ($requets->file_data) {
            File::get($requets->file_data);
        }
        exit;
    }
}
