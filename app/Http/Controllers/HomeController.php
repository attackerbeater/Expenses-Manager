<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Expense;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chart_options = [
          'chart_title' => 'My Expenses',
          'report_type' => 'group_by_string',
          'model' => 'App\Expense',
          'group_by_field' => 'amount',
          'chart_type' => 'pie',
          'filter_field' => 'created_at',
          'filter_period' => 'month',
        ];
        $chart1 = new LaravelChart($chart_options);
        $expenses = Expense::all();
        // $expenses = DB::table('expenses')->get();
        $user = Auth::user();


        return view('home', compact('chart1', 'expenses', 'user'));

    }
}
