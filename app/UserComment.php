<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    //
    public $table = "comments";
    protected $fillable = ['user_id','body','support_ticket_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
