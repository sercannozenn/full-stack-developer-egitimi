<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'tags';

    public function getUser()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id')->select('name');
    }

    public function scopeStatusActive($query)
    {
        return $query->where('status', 1);
    }
}
