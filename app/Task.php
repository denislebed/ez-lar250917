<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   protected $fillable = ['name'];

   /**
   * Получить пользователя - владельца данной задачи
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
