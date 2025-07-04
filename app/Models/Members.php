<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $fillable=[
        'fname', 'mname', 'lname','mobile','ministry','registeras','occupation','gender',
        'birthday', 'marital','address','email', 'document'
    ];
    
}
