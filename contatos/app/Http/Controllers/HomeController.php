<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Contato;

class HomeController extends Controller {

	public function index() {
		$data = array();
		$contatos = Contato::all();

		$data = array("contatos" => $contatos);

		return view("home", $data);
	}

	public function add(Request $r) {
		if($r->has("nome") && $r->has("email")) {
			$nome = $r->input("nome");
			$email = $r->input("email");

			$contato = new Contato;
			$contato->name = $nome;
			$contato->email = $email;
			$contato->save();
		}

		return redirect("/");
	}

	public function del($id) {

		Contato::find($id)->delete();

		return redirect("/");

	}
}