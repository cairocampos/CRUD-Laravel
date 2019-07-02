<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Contato;

class EditarController extends Controller {

	public function index($id, Request $r) {
		$data = array();

		$contato = Contato::find($id);		

		$data = array("contato" => $contato);

		return view("editar", $data);
	}

	public function update(Request $r) {
		if($r->has("id") && $r->has("nome") && $r->has("email")) {
	
			$id = $r->input("id");
			$name = $r->input("nome");
			$email = $r->input("email");

			$contato = Contato::find($id);
			$contato->name = $name;
			$contato->email = $email;
			$contato->save();	
		}

		return redirect("/");
	}
}