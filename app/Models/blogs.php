<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use CrudTrait;
    //
    protected $fillable = [
        'author',
        'title',
        'description',
        'image',
    ];
}
