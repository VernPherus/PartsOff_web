<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        "title",
        "image",
        "image_mime",
        "image_size",
        "description",
        "status",
        "price",
        "tags",
        "created_by",
        "updated_by"
    ];
}
