<?php
/* ================================================

  File Name         	  : CompanyCRUDController.php
  Description             : This is used for controller file
  Designed By		      : Shuvadeep Podder
  Designed On		      : 01-May-2022
  Devloped By             : Shuvadeep Podder
  Devloped On             : 01-May-2022
  Update History          : <Updated by>		<Updated On>		<Remarks>

  ================================================== */

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    //Display a listing of the resource.
    public function index () {
        $company = company::all();
        // dd($varCompanise);
        return view('home', ['company'=>$company]);
        
    }

    //Show the form for creating a new resource.
    public function create (Request $request) {

        $request->validate([
            'Emp_name' => 'required',
            'Emp_email' => 'required',
            'Emp_address' => 'required'
        ]);


        $varCompanise = new company;

        $varCompanise -> Emp_name       = $request -> Emp_name;
        $varCompanise -> Emp_email      = $request -> Emp_email;
        $varCompanise -> Emp_address    = $request -> Emp_address;
        
        $varCompanise ->save();
        return redirect('/')->with('status', 'Inserted successfully');

    }

    // Show the form for edit the specified resource.
    public function edit ($id) {

        $company = company::find($id);
        return view('editform', ['company' => $company]);

    }

    // Update the specified resource in the storage.
    public function update (Request $request, $id) {

        $request->validate([
            'Emp_name' => 'required',
            'Emp_email' => 'required',
            'Emp_address' => 'required'
        ]);

        $company = company::find($id);

        $company -> Emp_name       = $request -> Emp_name;
        $company -> Emp_email      = $request -> Emp_email;
        $company -> Emp_address    = $request -> Emp_address;

        $company ->save();
        return redirect('/')->with('status', 'Updated successfully');

    }

    public function destroy ($id) {

        $company = company::where('id', $id)->delete();
        return redirect('/')->with('status', 'Deleted successfully');

    }
}
