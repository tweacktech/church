<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Financial;
use Carbon\Carbon;
use Validator;
use DB;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FinancialController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }

public function indexFinancial(){

  $data =Financial::latest()->paginate(6);

  return view('financial.index',compact('data'));
}

public function addFinancial(Request $req){


      $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new Financial with validated data
        $Financial = new Financial();
        $Financial->name = $req->input('name');
        $Financial->amount = $req->input('amount');
        $Financial->date = $req->input('date');
        $Financial->save();
        Alert('Success', 'Added successfully!');
  return redirect()->back();
}



public function deleteFinancial($id) {
    $Financial = Financial::find($id);
    $Financial->delete();
    Alert('warning', 'An item deleted!');
    return redirect()->back()->with('success', 'Financial deleted successfully.');
}




public function unhideFinancial(Request $req, $id)
  {
    $update = DB::table('financials')->where('id', $id)->update(['status' => '1']);
    if ($update) {
       Alert('Success', 'Unhide successfully!');
      return redirect()->back();
    }
    return redirect()->back();
  }

  public function hideFinancial(Request $req, $id)
  {
    //$data = ['status' => 0];
    $update = DB::table('financials')->where('id', $id)->update(['status' => '0']);
    if ($update) {
      Alert('Success', 'hide successfully!');
      return redirect()->back();
    }
    return redirect()->back();
  }

public function editFinancial(Request $req, $id)
  {
    
    $update =Financial::find( $id);

    
    return view('financial.show',compact('update'));
  }


public function updateFinancial(Request $request, $id) 
{

   $Financial = Financial::find($id);
   $Financial->name = $request->input('name');
    $Financial->amount = $request->input('amount');
    $Financial->date = $request->input('date');
    $Financial->save();
    Alert('Success', 'updated successfully!');
    return redirect()->back()->with('success', 'Financial updated successfully.');

  
}

}
