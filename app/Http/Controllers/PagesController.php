<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(){
    	$people = ['lb', 'fh', 'cc'];
        $poops = ['3', '2', '3'];
    	return view('pages.about', compact('people', 'poops'));
    }
    // Contact Page
    public function contact(){
    	$people = ['lb', 'fh', 'cc'];
        $poops = ['3', '2', '3'];
    	return view('pages.contact', compact('people', 'poops'));
    }
}
