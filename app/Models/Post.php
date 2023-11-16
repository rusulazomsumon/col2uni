<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded =[];

    // category relation sending with post 
    public function category(){
        return $this->belongsTo(Category::class);
    }
    // User relation sending with post 
    public function user(){
        return $this->belongsTo(User::class);
    }
}
