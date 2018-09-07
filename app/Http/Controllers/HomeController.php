<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function forms(){
        return view('forms.form1');
    }

    public function profile(){
        return view('users.company_profile');
    }

    public function user_d(){
        return view('users.dashboard');
    }

    public function admin(){
        return view('admin.dashboard');
    }

    public function examiner(){
        return view('examiner.home');
    }

    public function op2_ib(){
        return view('examiner.op2-ib');
    }
    public function op2_rb(){
        return view('examiner.op2-rb');
    }

    public function op1_sched(){
        return view('examiner.op1_sched');
    }
    public function op1_summ(){
        return view('examiner.op1_summ');
    }
    public function ip2_1(){
        return view('users.ip2_1');
    }
    public function ip2_2(){
        return view('users.ip2_2');
    }
    public function ip2_3(){
        return view('users.ip2_3');
    }
    public function ip2_4(){
        return view('users.ip2_4');
    }

}
