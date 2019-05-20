<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    protected $fillable =[
        'id',
        'user_id',
        'title',
        'contents',
        'reporting_time',
    ];
}
