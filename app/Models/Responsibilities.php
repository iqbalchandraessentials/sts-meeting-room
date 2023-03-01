<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsibilities extends Model
{
    protected $table = 'responsibilities';
    protected $fillable = ['id_requisition','main_response','task', 'report'];
}
