<?php 

namespace App\Http\Controllers;
use App\Models\Produk;

class UserController extends Controller {

	function showIndex(){
		$data['list_produk'] = Produk::all();
		return view ('home', $data);

	}
}