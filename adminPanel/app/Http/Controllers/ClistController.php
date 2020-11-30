<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClistController extends Controller
{
    public function index()
    {
        $companyDB = DB::table('company')->get(); // Gets Data from Database
        return view('companyList', ['companyDB' => $companyDB]);
    }
    public function delete($data)
    {
        DB::delete('delete from company where id = ?', [$data]);
        return redirect('companyList')->with('success','Data Removed');
    }

    public function show($id)
    {
        $data = DB::select('select * from company where id = ?', [$id]);
        return view('updateForm',['data'=>$data]);
    }

    public function edit(Request $request,$id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $image = $request->input('image');
        $website = $request->input('website');

        DB::update('update company set name = ?, email = ?, image = ?, website = ? where id = ?', [$name,$email,$image,$website,$id]);
        return redirect('companyList')->with('success','Data Updated');
    }
}