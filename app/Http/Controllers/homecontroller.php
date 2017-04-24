<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use home;
class homecontroller extends Controller
{
    public function index(){
    	$sum='';
    	$nam='Tofayal ahmed';
    	
    	return view('about',compact('sum','nam',$sum,$nam));
}
}
