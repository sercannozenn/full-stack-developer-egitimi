<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function subComments()
    {
        return $this->hasMany('App\Models\Comments', 'parent', 'id')
            ->where('status', '=', 1);
    }

}
