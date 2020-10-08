<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //defined witch column id value allowed to be inserted into the db
    protected $fillable = [
      'user_id',
      'content',
      'completed',
    ];
}
