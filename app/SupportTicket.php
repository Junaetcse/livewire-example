<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    //

    public function comments()
    {
        return $this->hasMany(App\UserComment::class);
    }
}
