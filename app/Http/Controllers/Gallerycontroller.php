<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Carbon\Carbon;
use Validator;
use DB;
use Auth;

class Gallerycontroller extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
    }


public function indexGallery(){

  $data =Gallery::latest()->paginate(6);

  return view('gallery.index',compact('data'));
}

public function addGallery(Request $req){


      $validator = Validator::make($req->all(), [
            'Name' => 'required|string|max:255',
            'Image' => 'required|Image',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($req->file('Image')=="") {
            
        }else{
        $file = $req->file('Image');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('gallery/'), $file_name);
        // Create a new Gallery with validated data
        $Gallery = new Gallery();
        $Gallery->Name = $req->input('Name');
        $Gallery->Image = $file_name;
        $Gallery->save();
  return redirect()->back();}
}

public function deleteGallery($id) {
    $Gallery = Gallery::find($id);
    $Gallery->delete();
    
    return redirect()->back()->with('success', 'Gallery deleted successfully.');
}




public function unhideGallery(Request $req, $id)
  {
    $update = DB::table('galleries')->where('id', $id)->update(['status' => '1']);
    if ($update) {
      
      return redirect()->back();
    }
    return redirect()->back();
  }

  public function hideGallery(Request $req, $id)
  {
    //$data = ['status' => 0];
    $update = DB::table('galleries')->where('id', $id)->update(['status' => '0']);
    if ($update) {
      
      return redirect()->back();
    }
    return redirect()->back();
  }

public function editGallery(Request $req, $id)
  {
    
    $update =Gallery::find( $id);

    
    return view('gallery.show',compact('update'));
  }


public function updateGallery(Request $request, $id) 
{

  if ($request->file('Image')!="" && $request->file('Audio')!="") {
     $file = $request->file('Image');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('gallery/'), $file_name);

     $files = $request->file('Audio');
    $file_names = time() . $files->getClientOriginalName();
    $files->move(public_path('sermon/'), $file_names);

    $Gallery = Gallery::find($id);
   $Gallery->Name = $request->input('Name');
   
    $Gallery->Image = $file_name;
    $Gallery->save();
    return redirect()->back()->with('success', 'Gallery updated successfully.');

  }elseif ($request->file('Image')!="") {
    $file = $request->file('Image');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('sermon/'), $file_name);

    $Gallery = Gallery::find($id);
   $Gallery->Name = $request->input('Name');
   
    $Gallery->Image = $file_name;
    $Gallery->save();
    return redirect()->back()->with('success', 'Gallery updated successfully.');

  }elseif($request->file('Audio')!=""){

     $files = $request->file('Audio');
    $file_names = time() . $files->getClientOriginalName();
    $files->move(public_path('sermon/'), $file_names);

    $Gallery = Gallery::find($id);
   $Gallery->Name = $request->input('Name');
   
    $Gallery->save();
    return redirect()->back()->with('success', 'Gallery updated successfully.');

  }else{

   $Gallery = Gallery::find($id);
   $Gallery->Name = $request->input('Name');
   
    $Gallery->save();
    return redirect()->back()->with('success', 'Gallery updated successfully.');

  }

}
}
