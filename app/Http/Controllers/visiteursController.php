<?php 
namespace App\Http\Controllers;
 use Illuminate\Http\Request;


use App\visiteurs;
//use DB;

class visiteursController extends Controller
{

	public function save(Request $request){
		$visiteurs = new visiteurs;
		$visiteurs->NomVisiteurs = $request->nom;
		$visiteurs->EmailVisiteurs = $request->email;
		$visiteurs->TélephoneVisiteurs = $request->phone;
		$visiteurs->MessageVisiteurs = $request->message;
        //dd($visiteurs);
        $visiteurs->save();

		if($visiteurs->save()){
			return redirect()->back()->withSuccess("Votre message a été soumis avec succès");
		}else{
			return redirect()->back()->withError("Une erreur est parvenue, veuillez recommencer");
		}
	}


}


 ?>