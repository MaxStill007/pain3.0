<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orders extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_email',
        'title',
        'description',
        'amount',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'email', 'user_email', 'name','user_name');
    }
}