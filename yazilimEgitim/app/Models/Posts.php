<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'posts';

    public function getUser()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function getCategory()
    {
        return $this->hasOne('App\Models\PostCategory', 'id', 'category_id')->select('name', 'slug');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comments', 'post_id', 'id')
            ->where('parent', '=', 0);
    }

    public function scopeStatusActive($query)
    {
        return $query->where('posts.status', 1);
    }

    public function scopeCategory($query, $findCategory)
    {
        if ($findCategory)
        {
            return $query->where('category_id', $findCategory->id);
        }
    }

    public function scopeDefaultSearch($query, $text)
    {
        $query->where(function ($query) use ($text)
        {
            $query->where('title', 'LIKE', '%' . $text . '%')
                ->orWhere('slug', 'LIKE', '%' . $text . '%')
                ->orWhere('content', 'LIKE', '%' . $text . '%');
        });
    }

}
