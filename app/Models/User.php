<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;

class User extends Authenticatable
{
    use HasFactory, SoftDeletes , Searchable;

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
            'Role',
    
    ];

    public function room()
    {
        return $this->hasMany(Room::class);
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
        return $this->hasOne(Employee::class);  
    }
    


 

    public function toSearchableArray()
    {
        return [
            'FullName' =>$this->FullName,
            'Gender' =>$this->Gender, 
               'Email' =>$this->Email, 
                'Role' =>$this->Role,
                'Address' =>$this->Address,
        ];
    } 
        
    


    
    


}
