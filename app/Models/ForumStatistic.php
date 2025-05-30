<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumStatistic extends Model
{
    protected $fillable = [
        'total_topics',
        'total_users',
        'daily_topics',
        'active_contributors',
        'stat_date',
    ];
}
