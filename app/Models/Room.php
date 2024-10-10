<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use App\Models\User;

class Room extends Model
{
    use HasFactory ,SoftDeletes , Searchable;
    protected $guarded = [];



   

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function user()  
    {
        return $this->belongsTo(User::class);  
    }

    public function toSearchableArray()
    {
        return [
            'Roomtype' =>$this->Roomtype,
            'price' =>$this->price, 
               'status' =>$this->status, 
                'description' =>$this->description,
                'Rate' =>$this->Rate,
        ];
    } 

}
