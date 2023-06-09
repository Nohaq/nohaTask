<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{ protected $fillable=['name'];
    use HasFactory;
    public function families(){
        return $this->hasMany(Family::class);
    }
}
