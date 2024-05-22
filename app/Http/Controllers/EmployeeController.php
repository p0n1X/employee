<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
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
     * Controller for visualization data in Employee Page
     *
     * @return View
     */
    public function show():View
    {
        $employees = Employee::orderBy('id', 'desc')->paginate(10);
        return view('employee.show', ['employees' => $employees]);
    }

    /**
     * Controller for creating a new Employee
     *
     * @return View
     */
    public function create():View
    {
        return view('employee.create');
    }

    /**
     * Controller for creating new Employee record in Database
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request):RedirectResponse
    {
        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->age = $request->age;
        $employee->city = $request->city;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->company = $request->company;
        $employee->save();
        return redirect('/employee');
    }

    /**
     * Edit form for Employee
     *
     * @param $id
     * @return View
     */
    public function edit($id):View
    {
        $employees = Employee::find($id);
        return view('employee.edit', ['employee' => $employees]);

    }

    /**
     * Controller for update on record in database for Employee
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request):RedirectResponse
    {
        $employee = Employee::find($request->id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->age = $request->age;
        $employee->phone = $request->phone;
        $employee->city = $request->city;
        $employee->email = $request->email;
        $employee->company = $request->company;
        $employee->save();
        return redirect('/employee');
    }

    /**
     * Controller for delete a Employee from database
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function delete(Request $request):RedirectResponse
    {
        $employee = Employee::find($request->delete_id);
        $employee->delete();
        return redirect('/employee');
    }
}
