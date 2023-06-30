<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\Financial;
use App\Models\Event;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data=Post::latest()->paginate(6);
       
        return view('index',compact('data'));
    }

    public function financial()
    {
         $data=Financial::latest()->paginate(6);
       
        return view('financial',compact('data'));
    }
     public function event()
    {
         $data=Event::latest()->paginate(6);
       
        return view('Event',compact('data'));
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
