<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = ['title','slug','user_id','channel_id','content'];


    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
