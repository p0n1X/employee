<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

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
     * Controller for visualization of data with DataTables
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $filter = [
            "company" => "",
            "city" => ""
        ];

        if (isset($request->company) && $request->company != "null") {
            $filter['company'] = $request->company;
        }
        if (isset($request->city) && $request->city != "null") {
            $filter['city'] = $request->city;
        }

        $companies = Employee::select('company')->groupBy('company')->get();
        $cities = Employee::select('city')->groupBy('city')->get();
        return view('layouts.home', compact('companies', 'cities', 'filter'));
    }

    /**
     * Controller for getting all or filtered data from database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function data_table(Request $request):JsonResponse
    {

        $query = Employee::query();

        if (isset($request->company) && $request->company != "null") {
            $query->where('company', $request->company);

        }
        if (isset($request->city) && $request->city != "null") {
            $query->orWhere('city', $request->city);
        }

        $result['data'] = $query->get();
        return response()->json($result);

    }
}
