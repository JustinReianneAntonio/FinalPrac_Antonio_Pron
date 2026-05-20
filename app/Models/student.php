<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $table = 'studentmngt';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'age',
        'address',
        'zip'
    ];
}
