<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    public $primaryKey = "user_id";

    protected $guarded = [];
}
