<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

    public function profileImage(){
        $imagePath=($this->image)?$this->image:'profile/FHhR0osNRv9XdYdk069u2u3euGl8qV5ZjTp7MCWE.jpeg';
        return '/storage/'.$imagePath;
    }
    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
