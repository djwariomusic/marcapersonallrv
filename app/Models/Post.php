<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $primaryKey = 'id';

    protected $table = 'posts';

    public function user(){
      return $this->belongsTo(User::class);
    }
}
