<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','nat_num','address_id'];

    function address(){
            return $this->belongsTo(Address::class);
    }
}
