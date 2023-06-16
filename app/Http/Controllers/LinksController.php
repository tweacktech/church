<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Gallery;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    public function tithe()
    {
         return view('pages.tithe');    }

   
        
    public function gallery()
    {
        $data=Gallery::latest()->paginate(6);
        return view('pages.gallery',compact('data'));
    }

     public function sermon()
    {
        $data=Post::latest()->paginate(6);
        return view('pages.sermon',compact('data'));
    }


    public function contact()
    {
         return view('pages.contact');
    }

    
    public function about()
    {
        return view('pages.about');
    }

     public function detail($id)
    {
           $data=Post::findorFail($id);

           return view('pages.detail',compact('data'));
    }

}
