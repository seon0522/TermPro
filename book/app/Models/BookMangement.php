<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookMangement extends Model
{
    use HasFactory;

    protected $table = 'book_mangements';

    protected $fillable = ['text', 'isbn'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
