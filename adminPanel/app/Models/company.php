<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $table = 'company';
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable= [
        'name', 'email', 'image', 'website',
    ];
}
