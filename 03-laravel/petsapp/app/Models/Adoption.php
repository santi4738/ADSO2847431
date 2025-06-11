<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    protected $fillable = [
        'user_id',
        'pet_id'
    ];

    // RelationShip: Adoption belongsTo User
    public function user() {
        return $this->belongsTo(User::class);
    }
    // RelationShip: Adoption belongsTo Pet
    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
