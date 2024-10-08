<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory , SoftDeletes;

    

    protected $fillable = [
        'Emp_position',
        'job-specific',
        'employment_date',
        'user_id',

    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

   
}
