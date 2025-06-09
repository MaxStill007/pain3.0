<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Mainpage extends Model
{
    use CrudTrait;
    //
   
    protected $fillable = [
        'type',
        'name',
        'description',
        'image',
    ];
}
