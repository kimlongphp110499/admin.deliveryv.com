<?php

namespace App\Services;

use Illuminate\Http\Request;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;

class GoogleAnalyticsService
{
    public static function index($startDate = null, $endDate = null)
    {
        try {
            $startDate = $startDate ? Carbon::createFromFormat('Y-m-d', $startDate) : Carbon::createFromFormat('Y-m-d', '2023-01-01');
            $endDate = $endDate ? Carbon::createFromFormat('Y-m-d', $endDate) : Carbon::now();
            if ($startDate->day === 1) {
                $startDate->addDay();
            }

            if ($startDate->lessThan($endDate)) {
                $endDate->addDay();
            }

            $analyticsData = Analytics::fetchTotalVisitorsAndPageViews(
                Period::create($startDate, $endDate)
            );
            $totalActiveUsers = collect($analyticsData)->sum('activeUsers');
            $totalScreenPageViews = collect($analyticsData)->sum('screenPageViews');

            return compact('totalActiveUsers', 'totalScreenPageViews');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
