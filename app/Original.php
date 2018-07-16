<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Original extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'original';

    /*
     * Hàm lấy toàn bộ data trong bảng original
     * trả về mảng object
     * */
    static public function data() {
        return json_decode(DB::collection('original')->get());
    }

    /*
     * Hàm lấy data theo id
     * trả về một object
     * */
    static public function getDataById($id) {
        return json_decode(DB::collection('original')->where('_id', $id)->first());
    }

    /*
     * Hàm lấy data theo ngôn ngữ
     * trả về mảng object
     * */
    static public function getDataByLang($id) {
        return json_decode(DB::collection('original')->where('lang', $id)->get());
    }

    /*
     * Hàm lấy data theo từ khóa
     * trả về chuỗi value của từ khóa đó
     * */
    static public function getDataValueByKey($id, $key) {
        $datas = DB::collection('original')->where('_id', $id)->get(["data"]);
        foreach ($datas as $data) {
            if ($data["data"][$key])
                return $data["data"][$key];
        }
    }
}