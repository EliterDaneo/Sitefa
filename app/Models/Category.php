<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'slug', 'user_id', 'status'])]
class Category extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
