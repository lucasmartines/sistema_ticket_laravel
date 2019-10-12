<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //

    protected $guarded = ['id'];
    public function user(){
        return $this->belogsTo("App\User");
    }
}
