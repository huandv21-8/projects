<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class reportController extends Controller
{
    public function report(Request $request)
    {
        $date = date_create($request->m);
        $month = date_format($date, "m");
        $year = $request->y;

        if (isset($month) && isset($year)) {
            $order_monthly = DB::table('order')
                ->whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->get();

            $customer_monthly = DB::table('order')
                ->whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->orderBy('id_customer')
                ->get();

            $total_monthly = 0;
            foreach ($order_monthly as $value) {
                $total_monthly = $total_monthly + $value->total_money;
            }
        } else {

            $order_monthly = DB::table('order')
                ->whereYear('created_at', '2020')
                ->whereMonth('created_at', '01')
                ->get();

            $customer_monthly = DB::table('order')
                ->whereYear('created_at', '2020')
                ->whereMonth('created_at', '01')
                ->orderBy('id_customer')
                ->get();

            $total_monthly = 0;
            foreach ($order_monthly as $value) {
                $total_monthly = $total_monthly + $value->total_money;
            }
        }

        $order = DB::table('order')
            ->get();

        $customer = DB::table('order')
            ->groupBy('id_customer')
            ->select(DB::raw('count(*) as id_customer'))
            ->where('id_customer', '<>', 1)
            ->get();

        $total = 0;
        foreach ($order as $value) {
            $total = $total + $value->total_money;
        }

        return view('admin.report.report', [
            'count_order' => count($order),
            'count_customer' => count($customer),
            'total' => $total,
            'count_order_monthly' => count($order_monthly),
            'count_customer_monthly' => count($customer_monthly),
            'total_monthly' => $total_monthly
        ]);
    }
}
