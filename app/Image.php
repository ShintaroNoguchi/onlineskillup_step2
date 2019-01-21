<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'path' => 'required|file|image|mimes:jpeg,png'
    );
}
