<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Camping extends Model
{
    use HasFactory , SoftDeletes , Searchable;

    protected $guarded = [];



    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function toSearchableArray()
    {
        return [
            'number_of_persons' =>$this->number_of_persons,
            'Camp_days' =>$this->Camp_days, 
               'id' =>$this->id, 
        ];
    } 
}
