<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	//add logic if log in then throw index else throw login page
    	return view('pages.index');
    }
    public function login(){
    	//add logic if log in then throw index else throw login page
    	return view('pages.index');
    }
}
