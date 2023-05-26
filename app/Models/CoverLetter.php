<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coverletter extends Model
{
    use HasFactory;
    protected $fillable = [
        'file', 'title','version' ,'is_active'
   ];
}
