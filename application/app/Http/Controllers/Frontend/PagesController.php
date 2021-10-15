<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * Display a user login page
     *
     * @return \Illuminate\Http\Response
     */
    public function userLogin()
    {
        return view('frontend.cus_login');
    }
    public function userRegister()
    {
        return view('frontend.cus_reg');
    }
    public function userDashboard()
    {
        return view('frontend.dashboard');
    }


}
