<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    // 开启软删除，前提是数据表有 deleted_at 字段
    use SoftDeletes;
    // 允许赋值的字段
    protected $fillable = ['category_id', 'title', 'content'];
    // 不允许赋值的字段，不可和上面冲突
    protected $guarded = [];


}
