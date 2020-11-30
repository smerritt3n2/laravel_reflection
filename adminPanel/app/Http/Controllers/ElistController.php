<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ElistController extends Controller
{
    public function index()
    {
        $employeeDB = DB::table('employees')->get(); // Gets Data from Database
        return view('employeeList', ['employeeDB' => $employeeDB]);
    }

    public function delete($data)
    {
        DB::delete('delete from employees where id = ?', [$data]);
        return redirect('employeeList')->with('success','Data Removed');
    }

    public function show($id)
    {
        $data = DB::select('select * from employees where id = ?', [$id]);
        return view('updateForm',['data'=>$data]);
    }

    public function edit(Request $request,$id)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $company = $request->input('company');
        $email = $request->input('email');
        $phone_number = $request->input('phone');

        DB::update('update employees set first_name = ?, last_name = ?, company = ?, email = ?, phone_number = ? where id =?', [$first_name,$last_name,$company,$email,$phone_number,$id]);
        return redirect('employeeList')->with('success','Data Updated');
    }
}
