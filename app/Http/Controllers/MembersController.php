<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MembersController extends Controller
{
    //
    public function index(){
    	$people = ['lb', 'fh', 'cc'];
        $poops = ['3', '2', '3'];
    	return view('members.index', compact('people', 'poops'));
    }
}
