<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //資料庫的表單名稱
    protected $table = 'comments';

    //主鍵
    protected $primaryKey = 'id';

    protected $fillable = ['title','name','context','email'];
}
