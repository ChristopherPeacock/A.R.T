<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\User;

class Contact extends Model
{
     protected $fillable = [
        'name',
        'email',
        'companyName',
        'message',
    ];

    public function user(){
    return $this->belongsTo(User::class);
}

    public function team(){
        return $this->belongsTo(Team::class);
    }

}
