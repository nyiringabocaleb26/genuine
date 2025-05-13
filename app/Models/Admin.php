<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admins";
    protected $fillable = [
       'Username','Password'
    ];
    protected $hidden = [
        'Password',
    ];

    public function getAuthPassword()
    {
        return $this->Password; 
    }
}
