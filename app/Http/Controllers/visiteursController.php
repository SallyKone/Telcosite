<?php 
namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Mail\VisiteursMessagesCreated;
 use Illuminate\Support\Facades\Mail;
use App\Http\Requests\VisiteursRequest;


use App\visiteurs;
//use DB;

class visiteursController extends Controller
{

	public function envoiMail(Request $request)
    {
    	
    	$Mailable = new VisiteursMessagesCreated($request->nom, $request->email, $request->phone, $request->msg);
    	Mail::to($request->email)->send($Mailable);

    	return view('index');
        
    }

	/*public function save(Request $request){
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
	}*/



}


 ?>