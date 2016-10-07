<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use View;

class BarangController extends Controller
{
    function index(){

    $data=
	[
     
    	'id' => 'oke sip',
    	'nama' => 'Dimas Alamsyah' 
     
    ];

    	//view('templates/master/barang');
	    //return view::make('templates/master/barang',$data);
	    return View('templates/master/barang')->with('data', $data);
    	//return View('templates/master/barang', $data);
    }
}
