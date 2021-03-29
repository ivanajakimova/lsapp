<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Table name
    public $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestemps
    public $timestamps = true;
}
