<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Member;
use App\Reservation;
use DB;

class AdminController extends Controller
{
    public function dashboard() {
        // Estimated Revenue
        $estimated_income_last_30 = DB::select(DB::raw('
            SELECT
                (sum(guests_total) * 27) as total
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '));

        // Total Customers
        $total_customers_last_30 = DB::select(DB::raw('
            SELECT
                sum(guests_total) as total
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '));

        // Total Reservations
        $total_reservations_last_30 = DB::select(DB::raw('
            SELECT
                count(*) as total
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '));

        // Total Employees
        $total_employees = DB::select(DB::raw('
            SELECT
                count(*) as total
            FROM users
            INNER JOIN role_user on role_user.user_id = users.id
            INNER JOIN roles on roles.id = role_user.role_id
            WHERE role_id = 2
        '));

        $latest_reservations = Reservation::where('guests_total', '>', 0)->limit(5)->orderBy('created_at', 'desc')->get();

        return view('admin/dashboard', [
            'estimated_income_last_30' => '$'.$estimated_income_last_30[0]->total,
            'total_customers_last_30' => $total_customers_last_30[0]->total,
            'total_reservations_last_30' => $total_reservations_last_30[0]->total,
            'total_employees' => $total_employees[0]->total,
            'latest_reservations' => $latest_reservations
        ]);
    }

    public function dailyRevenueLast30() {
        // return $estimate_income_daily_data = DB::select(DB::raw('
        //     SELECT
        //         DATE_FORMAT(created_at, "%Y-%m-%d") as reserved_day,
        //         (sum(guests_total) * 27) as estimated_earnings,
        //         count(*) as total_reservations,
        //         sum(guests_total)
        //     FROM restaurant.reservations
        //     GROUP BY reserved_day DESC;
        // '));

        return $estimate_income_daily_data = DB::select(DB::raw('
            SELECT
                DATE_FORMAT(created_at, "%Y-%m-%d") as x,
                (sum(guests_total) * 27) as y
            FROM restaurant.reservations
            GROUP BY x DESC;
        '));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
