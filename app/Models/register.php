<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
    protected  $table    = "register";
    protected $fillable = [
        'name',
        'age',
        'phone',
        'national_id',
        'password',
        'about_us',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   

}
