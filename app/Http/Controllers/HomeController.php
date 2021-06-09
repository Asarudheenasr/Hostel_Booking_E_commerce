<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $district=DB::table('hostels')->select('district')->distinct()->get();
          
        return view('index',['dist'=>$district]);
        return view('searchresult',['dist'=>$district]);

    }
    public function adminindex(){
        return view('admin/adminindex');
    }
    public function show()
    {
         $users=DB::table('users')->get();
            
          return view('admin/userlist',['users'=>$users]);
    }
    

    public function city($dist){        
      $city = DB::table('hostels')
        ->select('city')
        ->where('district','=',$dist)
        ->distinct()
        ->get();
    return $city;
    }

   
   
}

