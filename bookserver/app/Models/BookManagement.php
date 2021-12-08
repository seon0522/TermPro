<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookManagement extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'isbn'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $table =  'book_mangement';
//
//    function user(){
//        return $this->hasMany()
//    }
}
