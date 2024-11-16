<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{ 
  use HasFactory;
  // 要操作的資料表
  protected $table = 'list';

  // 關閉timestamps（預設是開啟）
  public $timestamps = false;

  // 宣告可操作欄位 (沒宣告的欄位不能用哦)
  protected $fillable = [
      'id', 'name', 'fin_name'
  ];
   
};
