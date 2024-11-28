<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primarykey = 'category_id';

    protected $fillable = [
        'categories_name',
        'is_deleted'
    ];
}
