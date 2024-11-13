<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;




class DataController extends Controller
{
    public function retrieveData() {

        // $get_report = Report::orderBy('created_at', 'DESC')->get();
        $get_report = Report::orderBy('created_at')->get();

        $data = [];

        foreach ($get_report as $report) {
            array_push($data, [
                'cash' => $report->cash,
                'gcash' => $report->gcash,
                'print_sales' => $report->print_sales,
                'merch_sales' => $report->merch_sales,
                'custom_sales' => $report->custom_sales,
                'total_sales' => $report->total_sales,
                'print_expenses' => $report->print_expenses,
                'merch_expenses' => $report->merch_expenses,
                'custom_expenses' => $report->custom_expenses,
                'total_expenses' => $report->total_expenses,
                'date' => $report->date,
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }
}


