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


    protected $guarded = [];

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

  
    


 

    public function toSearchableArray()
    {
        return [
            'name' =>$this->name,
            'Gender' =>$this->Gender, 
               'email' =>$this->email, 
                'Role' =>$this->Role,
                'Address' =>$this->Address,
        ];
    } 
        
    


    
    


}
