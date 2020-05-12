<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');
    
    // データ入力が異常な時に、保存しないで戻す
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
}
