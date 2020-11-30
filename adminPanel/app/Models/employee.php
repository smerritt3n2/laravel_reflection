<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable= [
        'first_name', 'last_name', 'company', 'email', 'phone_number', 'created_at', 'updated_at',
    ];
}
