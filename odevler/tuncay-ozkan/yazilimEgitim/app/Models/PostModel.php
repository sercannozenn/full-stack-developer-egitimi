<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'posts';

    public function getPostUser()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id')->select('name');
    }

    public function getCategory()
    {

        return  $this->belongsTo('App\Models\PostCategory', 'category_id', 'id')->select('name');
    }
}
