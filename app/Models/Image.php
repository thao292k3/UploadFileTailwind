<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Image extends Model
{

    use HasFactory;
    protected $fillable = [   "image_id",
    "image_path",
    "image_create_at",
    "image_update_at"]; 
    
    protected $primaryKey = "id";
    protected $table = "img_table";
    public $timestamps = false;
}
