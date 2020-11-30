<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('employee');
    }

    /**
     *  Gather Data and store in Database
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required'
       ]);

       $employee = new Employee([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'company' => $request->get('company'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone')
       ]);

       $employee->save();
       return redirect('employeeForm')->with('success',
       'Data Added');
    }
}
