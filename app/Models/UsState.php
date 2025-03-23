<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsState extends Model
{
    protected $fillable = ['state_code', 'state_name'];

    // Define relationship with UsCity
    public function cities()
    {
        return $this->hasMany(UsCity::class, 'id_state');
    }
}