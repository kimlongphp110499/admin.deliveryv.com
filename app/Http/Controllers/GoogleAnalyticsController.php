<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;

class GoogleAnalyticsController extends Controller
{
    public function index(Request $request)
    {
        try {
            $startDate = Carbon::createFromFormat('Y-m-d', '2022-01-02');
            $endDate = Carbon::now();

            $analyticsData = Analytics::fetchTotalVisitorsAndPageViews(
            Period::create($startDate, $endDate)
        );
        $totalActiveUsers = collect($analyticsData)->sum('activeUsers');
        $totalScreenPageViews = collect($analyticsData)->sum('screenPageViews');

        return response()->json([
            'total_active_users' => $totalActiveUsers,
            'total_screen_page_views' => $totalScreenPageViews,
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
    }
}
