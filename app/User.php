<?php

namespace App;
require 'vendor/autoload.php';
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User  extends Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'mongodb';
    protected $collection = 'user';

    static public function getAllUser() {
        return self::all();
    }
}