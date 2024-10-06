<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       'FullName',
        'Gender',
         'Address',
          'Image',
           'mobile', 
           'Email', 
           'Password', 
           'age', 
           'Room_ID', 
           'ID_Super',
            'ID_Manager',
    
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }


    
    


}
