<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveTable extends Model
{
    //

    protected $fillable = [
        'home', 'away', 'time', 'result',
    ];
    protected $table = 'liveTable';

}
