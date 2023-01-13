<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    private static $author;
    public static function saveauthor($request){
        self::$author = new author();
        self::$author->author_name = $request->author_name;
        self::$author->save();
    }
}
