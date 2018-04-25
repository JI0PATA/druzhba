<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $timestamps = false;

    public function mentor()
    {
        return $this->belongsTo('App\Mentor');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}
