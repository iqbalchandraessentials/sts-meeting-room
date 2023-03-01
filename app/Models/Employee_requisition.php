<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_requisition extends Model
{
    protected $table = 'employee_requisitions';

    protected $fillable = [
        'job_title',
        'level',
        'requested_by',
        'division',
        'budgeted',
        'location',
        'unit_business',
        'bugeted',
        'purpose',
        'start_project',
        'end_project',
        'state_employee_name',
        'status',
        'intern_month',
        'date_required',
        'personel_req',
        'gender',
        'education',
        'major',
        'age_min',
        'age_max',
        'experience',
        'fresh_graduate',
        'skill'
    ];

    public function respons()
    {
        return $this->hasMany(Responsibilities::class, 'id_requisition', 'id');
    }

    public function pt()
    {
        return $this->belongsTo(Pt::class, 'unit_business', 'id');
    }

    public function div()
    {
        return $this->belongsTo(div::class, 'division', 'id');
    }

    public function requested_by()
    {
        return $this->belongsTo(User::class, 'requested_by', 'id');
    }

}
