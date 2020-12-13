<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsList extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'posts';

    public function getUser()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id')->select('name');
    }

    public function getCate()
    {
        return $this->hasOne('App\Models\PostCategory','id','category_id')->select('name');
    }


}
