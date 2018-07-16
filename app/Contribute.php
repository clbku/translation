<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contribute extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'contribute';

    /*
     * Hàm lấy toàn bộ data
     * trả về mảng object
     * */
    static public function data() {
        return json_decode(DB::collection('contribute')->get());
    }

    /*
     * Hàm lấy toàn bộ data theo id
     * trả về mảng object
     * */
    static public function getDataById($id) {
        return json_decode(DB::collection('contribute')->where('_id', $id)->first());
    }

    /*
     * Hàm lấy toàn bộ data theo original id
     * trả về mảng object
     * */
    static public function getDataByOriginalId($id) {
        return DB::collection('contribute')->where('original_id', $id)->first();
    }

    /*
     * Hàm lấy toàn bộ data theo original id và lang
     * trả về mảng mảng
     * */
    static public function getDataByOriginalIdAndLang($id, $lang) {
        $data = DB::collection('contribute')->where('original_id', $id)->first();
        foreach ($data['data'] as $item) {
            if ($item['lang'] === $lang) return $item["data"];
        }
        exit;
    }
}
