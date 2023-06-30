<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Carbon\Carbon;
use Validator;
use DB;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
class MemberController extends Controller
{
      public function index()
    {
         $data=Member::all();
         return view('members.index',compact('data'));
    }

    public function store(Request $request)
    {

         $validator = Validator::make($request->all(), [
           'name' => 'required',
            'email' => 'required|email|unique:members',
            'dob' => 'required|date',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


      $data=  Member::create($request->all());
      if ($data) {
          // code...
      
 Alert('Success', 'Added successfully!');
      return redirect()->url('/')->with('success', 'Member registered successfully.');

    }Alert('Info', 'error!');

    }

public function deleteMember($id) {
    $Member = Member::find($id);
    $Member->delete();
    Alert('warning', 'An item deleted!');
    return redirect()->back()->with('success', 'Member deleted successfully.');
}

public function create(){
    return view('membersform');
}


public function unhideMember(Request $req, $id)
  {
    $update = DB::table('events')->where('id', $id)->update(['status' => '1']);
    if ($update) {
       Alert('Success', 'Unhide successfully!');
      return redirect()->back();
    }
    return redirect()->back();
  }

  public function hideMember(Request $req, $id)
  {
    //$data = ['status' => 0];
    $update = DB::table('events')->where('id', $id)->update(['status' => '0']);
    if ($update) {
      Alert('Success', 'hide successfully!');
      return redirect()->back();
    }
    return redirect()->back();
  }

public function editMember(Request $req, $id)
  {
    
    $update =Member::find( $id);

    
    return view('members.show',compact('update'));
  }


public function updateMember(Request $request, $id) 
{

  
   $Member = Member::find($id);
   $Member->name = $request->input('name');
    $Member->email = $request->input('email');
    $Member->phone = $request->input('phone');
    $Member->dob = $request->input('dob');
    $Member->address = $request->input('address');
    $Member->save();
     Alert('Success', 'updated successfully!');
    return redirect()->back()->with('success', 'Member updated successfully.');

  

}

}
