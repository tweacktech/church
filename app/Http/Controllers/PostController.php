<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\UploadedFile;
use App\Models\Post;
use Carbon\Carbon;
use Validator;
use DB;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


public function indexPost(){

  $data =Post::latest()->paginate(6);

  return view('sermon.index',compact('data'));
}

public function addPost(Request $req){


      $validator = Validator::make($req->all(), [
            'Title' => 'required|string|max:255',
            'Description' => 'required|string',
            'Image' => 'required|Image',
            'Audio' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($req->file('Image')=="" && $req->file('Audio')=="") {
            
        }else{
        $file = $req->file('Image');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('Sermon/'), $file_name);

   $files = $req->file('Audio');
    $file_names = time() . $files->getClientOriginalName();
    $files->move(public_path('Sermon/'), $file_names);
        // Create a new Post with validated data
        $Post = new Post();
        $Post->Title = $req->input('Title');
        $Post->Description = $req->input('Description');
        $Post->Image = $file_name;
        $Post->Audio = $file_names;
        $Post->save();
        Alert::success('Success', 'Operation completed successfully!');
  return redirect()->back();}
}

public function deletePost($id) {
    $Post = Post::find($id);
    $Post->delete();
    Alert::success('Success', 'Operation completed successfully!');
    return redirect()->back()->with('success', 'Post deleted successfully.');
}




public function unhidePost(Request $req, $id)
  {
    $update = DB::table('posts')->where('id', $id)->update(['status' => '1']);
    if ($update) {
      Alert::success('Success', 'Operation completed successfully!');
      return redirect()->back();
    }
    return redirect()->back();
  }

  public function hidePost(Request $req, $id)
  {
    //$data = ['status' => 0];
    $update = DB::table('posts')->where('id', $id)->update(['status' => '0']);
    if ($update) {
      Alert::success('Success', 'Operation completed successfully!');
      return redirect()->back();
    }
    return redirect()->back();
  }

public function editPost(Request $req, $id)
  {
    
    $update =Post::find( $id);

    
    return view('sermon.show',compact('update'));
  }


public function updatePost(Request $request, $id) 
{

  if ($request->file('Image')!="" && $request->file('Audio')!="") {
     $file = $request->file('Image');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('sermon/'), $file_name);

     $files = $request->file('Audio');
    $file_names = time() . $files->getClientOriginalName();
    $files->move(public_path('sermon/'), $file_names);

    $Post = Post::find($id);
   $Post->Title = $request->input('Title');
    $Post->Description = $request->input('Description');
    $Post->Image = $file_name;
    $Post->Audio = $file_names;
    $Post->save();
    Alert::success('Success', 'Operation completed successfully!');
    return redirect()->back()->with('success', 'Post updated successfully.');

  }elseif ($request->file('Image')!="") {
    $file = $request->file('Image');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('sermon/'), $file_name);

    $Post = Post::find($id);
   $Post->Title = $request->input('Title');
    $Post->Description = $request->input('Description');
    $Post->Image = $file_name;
    $Post->save();
    Alert::success('Success', 'Operation completed successfully!');
    return redirect()->back()->with('success', 'Post updated successfully.');

  }elseif($request->file('Audio')!=""){

     $files = $request->file('Audio');
    $file_names = time() . $files->getClientOriginalName();
    $files->move(public_path('sermon/'), $file_names);

    $Post = Post::find($id);
   $Post->Title = $request->input('Title');
    $Post->Description = $request->input('Description');
    $Post->Audio = $file_names;
    $Post->save();
    Alert::success('Success', 'Operation completed successfully!');
    return redirect()->back()->with('success', 'Post updated successfully.');

  }else{

   $Post = Post::find($id);
   $Post->Title = $request->input('Title');
    $Post->Description = $request->input('Description');
    $Post->save();
    Alert::success('Success', 'Operation completed successfully!');
    return redirect()->back()->with('success', 'Post updated successfully.');

  }

}
}
