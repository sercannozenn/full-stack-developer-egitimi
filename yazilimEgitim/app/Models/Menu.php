<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function getUser()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id')->select('name');
    }

}
