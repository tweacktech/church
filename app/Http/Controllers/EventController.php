<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\UploadedFile;
use App\Models\Event;
use Carbon\Carbon;
use Validator;
use DB;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


public function indexEvent(){

  $data =Event::latest()->paginate(6);

  return view('event.index',compact('data'));
}

public function addEvent(Request $req){


      $validator = Validator::make($req->all(), [
            'Title' => 'required|string|max:255',
            'Description' => 'required|string',
            'time' => 'required',
            'date' => 'required|date'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Create a new Event with validated data
        $Event = new Event();
        $Event->Title = $req->input('Title');
        $Event->Description = $req->input('Description');
        $Event->time = $req->input('time');
        $Event->date = $req->input('date');
        $Event->save();
         Alert('Success', 'Added successfully!');
  return redirect()->back();
}

public function deleteEvent($id) {
    $Event = Event::find($id);
    $Event->delete();
    Alert('warning', 'An item deleted!');
    return redirect()->back()->with('success', 'Event deleted successfully.');
}




public function unhideEvent(Request $req, $id)
  {
    $update = DB::table('events')->where('id', $id)->update(['status' => '1']);
    if ($update) {
       Alert('Success', 'Unhide successfully!');
      return redirect()->back();
    }
    return redirect()->back();
  }

  public function hideEvent(Request $req, $id)
  {
    //$data = ['status' => 0];
    $update = DB::table('events')->where('id', $id)->update(['status' => '0']);
    if ($update) {
      Alert('Success', 'hide successfully!');
      return redirect()->back();
    }
    return redirect()->back();
  }

public function editEvent(Request $req, $id)
  {
    
    $update =Event::find( $id);

    
    return view('event.show',compact('update'));
  }


public function updateEvent(Request $request, $id) 
{

  
   $Event = Event::find($id);
   $Event->Title = $request->input('Title');
    $Event->Description = $request->input('Description');
    $Event->time = $request->input('time');
    $Event->date = $request->input('date');
    $Event->save();
     Alert('Success', 'updated successfully!');
    return redirect()->back()->with('success', 'Event updated successfully.');

  

}
}
