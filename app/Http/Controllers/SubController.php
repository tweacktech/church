<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sub;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rule;
use Validator;
use DB;
use Auth;
class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $data=Sub::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


public function store(Request $request)
{   
    $user=DB::table('subs')->where('email',$request->input('email'))->get();
    if ($user) {
        Alert::warning('Warning', 'Email already exists');
        return redirect()->back();
    }
    $validator = Validator::make($request->all(), [
        'email' => ['required', 'email', Rule::unique('members')],
    ]);

    if ($validator->fails()) {
        Alert::warning('Warning', 'Email already exists');
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = Sub::create($request->all());
    Alert::success('Success', 'Operation completed successfully!');
    return redirect()->back();
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return $data=Sub::findOrFail($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data=Sub::findOrFail($id);

           $data->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Sub::findOrFail($id);

           $data->delete();

    }
}
