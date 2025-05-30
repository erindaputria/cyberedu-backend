<?php

namespace App\Http\Controllers;

use App\Models\ForumStatistic;
use Illuminate\Http\Request;

class ForumStatisticController extends Controller
{
    public function getStatistic()
    {
        $stats = ForumStatistic::latest()->first();

        if (!$stats) {
            $stats = new ForumStatistic([
                'total_topics' => 0,
                'total_users' => 0,
                'daily_topics' => 0,
                'active_contributors' => 0,
                'stat_date' => now()->format('Y-m-d')
            ]);
            $stats->save();
        }

        return response()->json([
            'total_topics' => $stats->total_topics,
            'total_users' => $stats->total_users,
            'daily_topics' => $stats->daily_topics,
            'active_contributors' => $stats->active_contributors,
            'updated_at' => $stats->updated_at->format('Y-m-d H:i:s')
        ]);
    }
}
