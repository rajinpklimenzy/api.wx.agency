<?php

namespace App\Models\Gx;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kirim extends Model
{
    use HasFactory;
    protected $fillable = ['kirim_id','name','email','count','status'];
}
