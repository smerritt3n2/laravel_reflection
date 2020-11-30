<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;

class CompanyController extends Controller
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
        return view('company');
    }

    /**
     *  Gather Data and store in Database
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'image' => 'required',
            'website' => 'required'
       ]);

       $company = new Company([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'image' => $request->get('image'),
            'website' => $request->get('website')
       ]);

       if($request->hasFile('image')) // If there is a image in array, execute command
       {
        request('image')->store('public/uploads'); // Stores Image into Public Folder to use later   
       }
       
       $company->save();
       return redirect('companyForm')->with('success',
       'Data Added');
    }
}
