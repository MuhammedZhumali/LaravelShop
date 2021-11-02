<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{
    use HasFactory;

    public static function header() {
        return self::where('place', 'header')->get();
    }
    public static function footer() {
        return self::where('place', 'footer')->get();
    }
}
