<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Contato;

class HomeController extends Controller {

	public function index() {
		$data = array();
		$contatos = Contato::all();

		$data = array("contatos" => $contatos);

		return view("home", $data);
	}

}