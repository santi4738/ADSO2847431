<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    protected $fillable = [
        'user_id',
        'pet_id'
    ];
    //Relationship: Adoption belongsTo User
    public function user() {
        return $this->belongsTo(user::class);
    }
    //Relationship: Adoption belongsTo Pet
    public function pet() {
        return $this->belongsTo(pet::class);
    }
}
