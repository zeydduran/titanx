<?php
namespace App\Controllers\Frontend;

use System\Kernel\Controller;
use View;
use DB;
use Auth;
class Home extends Controller
{

	public function index()
	{
		//dd(Auth::admin()->createUser('zeyd.duran2@gmail.com','563289ze','zeydo2'));
		dd(Auth::getRoles());
		 try {
		 	 $a = Auth::admin()->addRoleForUserById(2, \Delight\Auth\Role::SUBSCRIBER);
		 	 dd($a);
		 }
		 catch (\Delight\Auth\UnknownIdException $e) {
		 	dd($e);
		 }
		 try {
		 	if (Auth::admin()->doesUserHaveRole(1, \Delight\Auth\Role::ADMIN)) {
		 		echo 'belirtilen kullanıcı bir yönetici';
		 	}
		 	else {
		 		echo 'belirtilen kullanıcı * yönetici değil *';
		 	}
		 }
		 catch (\Delight\Auth\UnknownIdException $e) {
		 	echo 'Bilinmeyen Kullanıcı';
		 }
	}

}
