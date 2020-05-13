<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    // validationデータ入力が異常な時に、保存しないで戻す
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    
    public function histories()
    {
      return $this->hasMany('App\ProfileHistory');

    }
}
