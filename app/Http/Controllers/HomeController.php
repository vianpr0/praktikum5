<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
public function index() 
{ 
$nama = ['Alice', 'Bob', 'Charlie'];
return view('home', ['users' => $nama]);
} 
public function about() 
{ 
return view('about'); 
} 
}
