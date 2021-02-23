<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
     $title = 'Welcome to TSS!';
     return view ('pages.index')->with('title', $title);
    }

    public function booking(){
        $title = 'Book Lesson';
        return view ('pages.booking')->with('title', $title);
     }
     
     public function services(){
         $data = array(
             'title' => 'Scheduled ',
             'services' => ['Web Design', 'Programming', 'SEO']
         );

        return view ('pages.services')->with($data);
     }

      
    
     
}
