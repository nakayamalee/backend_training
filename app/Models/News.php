<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
     //資料庫的表單名稱
     protected $table = 'news';

     //主鍵
     protected $primaryKey = 'id';

     protected $fillable = ['created_at', 'updated_at', 'title', 'content', 'img'];
}
