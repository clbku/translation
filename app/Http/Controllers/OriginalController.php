<?php

namespace App\Http\Controllers;

use App\Original;
use Illuminate\Http\Request;

class OriginalController extends Controller
{
    protected function __construct($origin) {
        $this->origin = $origin;
    }

    public function getIndex() {
        $originals = Original::getDataValueByKey('5b48535e1e75c70bb438402f','failed');
//        foreach ($originals as $original) {
//            var_dump($original);
//        }
        echo $originals;
        exit;
    }

}
