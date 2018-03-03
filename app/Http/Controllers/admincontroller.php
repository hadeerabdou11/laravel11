<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
   public function index()
    {
	$admins=[
		'0' =>[
			'email' => 'admin1.gmail.com',
			'username' => 'admin1'
		],

		'1' =>[
			'email' => 'admin2.gmail.com',
			'username' => 'admin2'

		]
	];
	return view ('admin.admin',compact('admins'));
	}
}
